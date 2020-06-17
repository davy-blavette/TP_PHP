$( document ).ready(function() {


    console.log( "Bonjour les CDA3 ! Jquery Ready" );
    console.log( "Lancement de slick Slider" );


    $('.slider').slick({
            accessibility:true,
            prevArrow:'<button type="button" data-role="none" class="slick-prev">Previous</button>'

        });


/* Exemple a ne pas faire
    $('article.art1 button').on("click",function(){

        console.log("je click");

        if($('.main article.art1 p.desc:visible').length){

            $('.main article.art1 p.desc').hide();
            $('#about article.art1 .btn').html('En savoir plus');

        }else{

            $('.main article.art1 p.desc').show();
            $('#about article.art1 .btn').html('Réduire');

        }



    });

    $('article.art2 button').on("click",function(){

        console.log("je click");

        if($('.main article.art2 p.desc:visible').length){

            $('.main article.art2 p.desc').hide();
            $('#about article.art2 .btn').html('En savoir plus');

        }else{

            $('.main article.art2 p.desc').show();
            $('#about article.art2 .btn').html('Réduire');

        }

    });

    */
    /* Utilisation des proprietes de Class - hasClass RemoveClass AddClass */

    $('.btn.morecss').on("click",function(){

        console.log("je click");
        var desc = $(this).prev();

        if(desc.hasClass('overheight')){

            desc.removeClass('overheight');
            $(this).html('En savoir plus');

        }else{

            desc.addClass('overheight');
            $(this).html('Réduire');

        }

    });


    /* prev() et show() */
    $('.btn.more').on("click",function(){

        console.log("je click");
        var desc = $(this).prev();

        if($(this).prev(':visible').length){

            desc.hide('slow');
            $(this).html('En savoir plus');

        }else{

            desc.show('slow');
            $(this).html('Réduire');

        }

    });


});