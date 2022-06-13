/*  ---------------------------------------------------
    Template Name: Gutim
    Description: Gutim Fitness HTML Template
    Author: Colorlib
    Author URI: http://colorlib.com
    Version: 1.0
    Created: Colorlib
---------------------------------------------------------  */

'use strict';

(function ($) {

    /*------------------
        Preloader
    --------------------*/
    $(window).on('load', function () {
        $(".loader").fadeOut();
        $("#preloder").delay(200).fadeOut("slow");

        /*------------------
            Gallery filter
        --------------------*/
        $('.gallery-controls li').on('click', function() {
            $('.gallery-controls li').removeClass('active');
            $(this).addClass('active');
        });
        if($('.gallery-filter').length > 0 ) {
            var containerEl = document.querySelector('.gallery-filter');
            var mixer = mixitup(containerEl);
        }

    });

    /*------------------
        Background Set
    --------------------*/
    $('.set-bg').each(function () {
        var bg = $(this).data('setbg');
        $(this).css('background-image', 'url(' + bg + ')');
    });

    /*------------------
		Navigation
	--------------------*/
    $(".mobile-menu").slicknav({
        prependTo: '#mobile-menu-wrap',
        allowParentLinks: true
    });

    /*------------------
		Menu Hover
	--------------------*/
    $(".header-section .nav-menu .mainmenu ul li").on('mousehover', function() {
        $(this).addClass('active');
    });
    $(".header-section .nav-menu .mainmenu ul li").on('mouseleave', function() {
        $('.header-section .nav-menu .mainmenu ul li').removeClass('active');
    });

    /*------------------------
		Class Slider
    ----------------------- */
    $(".classes-slider").owlCarousel({
        items: 3,
        dots: true,
        autoplay: true,
        loop: true,
        smartSpeed: 1200,
        responsive: {
            0: {
                items: 1,
            },
            768: {
                items: 3,
            },
            992: {
                items: 3,
            }
        }
    });

    /*------------------------
		Testimonial Slider
    ----------------------- */
    $(".testimonial-slider").owlCarousel({
        items: 1,
        dots: false,
        autoplay: true,
        loop: true,
        smartSpeed: 1200,
        nav: true,
        navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"]
    });

    /*------------------
        Magnific Popup
    --------------------*/
    $('.video-popup').magnificPopup({
        type: 'iframe'
    });

    /*------------------
        About Counter Up
    --------------------*/
    $('.count').each(function () {
        $(this).prop('Counter',0).animate({
        Counter: $(this).text()
        }, {
            duration: 4000,
            easing: 'swing',
            step: function (now) {
            $(this).text(Math.ceil(now));
            }
        });
    });

    /*------------------
       Schedule Filter
    --------------------*/
    $('.nav-controls ul li').on('click', function() {
        var tsfilter = $(this).data('tsfilter');
        $('.nav-controls ul li').removeClass('active');
        $(this).addClass('active');
        
        if(tsfilter == 'all') {
            $('.schedule-table').removeClass('filtering');
            $('.ts-item').removeClass('show');
        } else {
            $('.schedule-table').addClass('filtering');
        }
        $('.ts-item').each(function(){
            $(this).removeClass('show');
            if($(this).data('tsmeta') == tsfilter) {
                $(this).addClass('show');
            }
        });
    });


    /*------------------
       Mon Code
       JQuery/Javascript
    --------------------*/

    //On gere les boutons qui ferme/cache la modal
    $('#my-modal .modal-footer button, #my-modal .close').on('click', function(){

        $("#my-modal").hide();

    });

    //on affiche la fenetre modal si on a du contenu entre les balises P
    if($('#my-modal .modal-body p').html().length){

        $("#my-modal").show();

    }

    //on verifie que la cible existe avant de lancer le plugin
    if($('#summernote').length){

        $('#summernote').summernote({
            height: 300,                 // set editor height
            minHeight: null,             // set minimum height of editor
            maxHeight: null,             // set maximum height of editor
            focus: true                  // set focus to editable area after initializing summernote
        });

    }

    $('.wysiwyg .primary-btn').on('click', function(){

        console.log('btn wysiwyg ready !');
        var description = $('#summernote').summernote('code');
        var title = $('.wysiwyg input[name=title]').val();

        //methode Ajax
        var request = $.ajax({
            url: "./lib/methode_ajax.php",
            method: "POST",
            data: { informations : 1, title:title, description : description },
            dataType: "json" //JSON = reponse attendu en array() ou HTML, reponse de type string
        });

        //reussite reponse 200 - Inclu le fait que vous avez pas les permissions requisent
        request.done(function( msg ) {
            //console.log(msg);
            //afichage de la modal ave
            $('#my-modal .modal-body p').html(msg.modal);

            $('#news_breadcrumb').append(msg.tmpl);

            $("#my-modal").show();
            //$( "#log" ).html( msg );
        });

        //erreur 404 ou 500 - le serveur ne repond pas, erreur PHP ?
        request.fail(function( jqXHR, textStatus ) {
            console.log( "Request failed: " + textStatus );
        });


        //stopper le comportement normal d'une balise de type <a>
        return false;

    });


    $('#sendmail .primary-btn').on('click', function(){

        console.log('btn sendmail ready !');
        var name = $('#sendmail input[name=name]').val();
        var email = $('#sendmail input[name=email]').val();
        var message = $('#sendmail textarea').val();

        //methode Ajax
        var request = $.ajax({
            url: "./lib/methode_ajax.php",
            method: "POST",
            data: { sendmail : 1, name:name, email : email, message:message },
            dataType: "json" //JSON = reponse attendu en array() ou HTML, reponse de type string
        });

        //reussite reponse 200 - Inclu le fait que vous avez pas les permissions requisent
        request.done(function( msg ) {
            //console.log(msg);
            //afichage de la modal ave
            $('#my-modal .modal-body p').html(msg.modal);

            $("#my-modal").show();
            //$( "#log" ).html( msg );
        });

        //erreur 404 ou 500 - le serveur ne repond pas, erreur PHP ?
        request.fail(function( jqXHR, textStatus ) {
            console.log( "Request failed: " + textStatus );
        });


        //stopper le comportement normal d'une balise de type <a>
        return false;

    });



    // On initialise la latitude et la longitude de Paris (centre de la carte)
    var lat = 44.099254;
    var lon = 3.079611;
    var macarte = null;
    var id_map = 'openmap';

    if($('#'+id_map).length){
        initMap(lat, lon, macarte, id_map);
    }


})(jQuery);

//Mes fonctions Javascript
// Fonction d'initialisation de la carte
function initMap(lat, lon, macarte, id_map) {
    // Créer l'objet "macarte" et l'insèrer dans l'élément HTML qui a l'ID "map"
    macarte = L.map(id_map).setView([lat, lon], 11);
    // Leaflet ne récupère pas les cartes (tiles) sur un serveur par défaut. Nous devons lui préciser où nous souhaitons les récupérer. Ici, openstreetmap.fr
    L.tileLayer('https://{s}.tile.openstreetmap.fr/osmfr/{z}/{x}/{y}.png', {
        // Il est toujours bien de laisser le lien vers la source des données
        attribution: 'données © <a href="//osm.org/copyright">OpenStreetMap</a>/ODbL - rendu <a href="//openstreetmap.fr">OSM France</a>',
        minZoom: 1,
        maxZoom: 20
    }).addTo(macarte);
}