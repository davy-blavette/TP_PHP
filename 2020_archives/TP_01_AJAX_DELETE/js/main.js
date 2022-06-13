$( document ).ready(function() {

    console.log( "ready!" );

    $('#members .btn-warning').on("click",function(){
        console.log('Je click pour supprimer');
        monboutonclick = $(this);
        $.ajax({
            url : './includes/ajax.php?member='+monboutonclick.data('member'),
            type : 'GET',
            dataType : 'html', // On désire recevoir du HTML
            success : function(mareponse, statut){ // code_html contient le HTML renvoyé
                console.log('success => ' + statut);
                $('#responseAjax').html(mareponse);
                monboutonclick.parent().parent().remove();
            }
        });

    });
    /*
    $.ajax({
        url : './includes/members.php',
        type : 'GET',
        dataType : 'html', // On désire recevoir du HTML
        success : function(code_html, statut){ // code_html contient le HTML renvoyé
            console.log('success => ' + statut);
            $('.members').html(code_html);

        },

        error : function(resultat, statut, erreur){
            console.log('error => ' + statut);
            $('.members').html("une erreur est survenue. veuillez réessayer ultérieurement !!");

        },

        complete : function(resultat, statut){
            console.log('complete => ' + statut);
            console.log('complete => ' + resultat);

        }
    });
*/
});