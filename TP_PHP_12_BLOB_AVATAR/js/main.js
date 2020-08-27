$(document).ready(function() {


    //Modifier un article
    $('#activite .btn-warning').on('click',function () {

        console.log("Je click pour modifier");

        if($(this).html() == "Fermer"){



            id = $('article').data('id');
            myTextTitle = $('input[name="title"]').val();
            mytextIntro = $('#intro .ql-editor').html();
            mytextDesc = $('#desc .ql-editor').html();

            $('input[name="title"]').addClass('d-none');
            $("h1").show().html(myTextTitle);

            $('#intro').prev().remove();
            $('#intro *').remove();

            $('#intro').removeClass('ql-container ql-snow');
            $('#intro').append(mytextIntro);

            $('#desc').prev().remove();
            $('#desc *').remove();

            $('#desc').removeClass('ql-container ql-snow');
            $('#desc').append(mytextDesc);

            //je lance ma fonction Ajax
            updateArticle(id, myTextTitle, mytextIntro, mytextDesc);

            $(this).html('Modifier');

        }else{

            $('input[name="title"]').removeClass('d-none');
            $("h1").hide();


            var toolbarOptions = [
                ['bold', 'italic', 'underline', 'strike'],        // toggled buttons
                ['blockquote', 'code-block'],

                [{ 'header': 1 }, { 'header': 2 }],               // custom button values
                [{ 'list': 'ordered'}, { 'list': 'bullet' }],
                [{ 'script': 'sub'}, { 'script': 'super' }],      // superscript/subscript
                [{ 'indent': '-1'}, { 'indent': '+1' }],          // outdent/indent
                [{ 'direction': 'rtl' }],                         // text direction

                [{ 'size': ['small', false, 'large', 'huge'] }],  // custom dropdown
                [{ 'header': [1, 2, 3, 4, 5, 6, false] }],

                [{ 'color': [] }, { 'background': [] }],          // dropdown with defaults from theme
                [{ 'font': [] }],
                [{ 'align': [] }],

                ['clean'],                                         // remove formatting button
                ['link', 'image', 'video'],
                ['showHtml']
            ];

            var quillintro = new Quill('#intro', {
                modules: {
                    toolbar: toolbarOptions
                },
                theme: 'snow'
            });

            var quilldesc = new Quill('#desc', {
                modules: {
                    toolbar: toolbarOptions
                },
                theme: 'snow'
            });

            sourceHtml();

            $(this).html('Fermer');
        }

    });

    function sourceHtml(){


        $('.ql-showHtml').on('click',function () {

            console.log('Hello');

        })


    }

    function updateArticle(id, title, intro, desc) {

        //on lance AJax
        $.ajax({
            //la configuration
            url : './includes/ajax.php',
            type : 'POST',
            dataType : 'json', //type json
            data : { //mes données en POST key:value
                action:'updateArticle',
                id:id,
                title:title,
                intro:intro,
                desc:desc
            }

        }).done(function(resultat, statut){
            //done = ca fonctionne, pas d'echec
            console.log(resultat["ctrl"]);

            if(resultat["ctrl"] == "true"){

                $('#infolog').html("Mise à jour éffectué");


            }else{
                $('#infolog').html("Une erreur c'est produite...");

            }

        });

    }

});