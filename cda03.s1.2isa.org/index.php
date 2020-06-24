<?php

//Superglobal $_GET

//pour afficher les informations du variable
//var_dump($_GET['page']);

$ar_pages_var = array(

    'accueil' => array(
        'title'         => 'Moto Club Millau Passion | Accueil',
        'description'   => 'Moto Club Millau Passion | Association de loisir autour de la moto !',
        'keywords'      => 'Moto, Plaisir, Club, Millau, Passion, Accueil',
        'h1'            => 'Accueil',
        'meteo'         => 1
    ),
    'activites' => array(
        'title' => 'Moto Club Millau Passion | Nos activités',
        'description' => 'Les activités de l\'association Moto Club Millau Passion',
        'keywords' => 'Activtés, Tarn, Deux roues, Millau, Passion, Accueil',
        'h1'            => 'Activités',
        'meteo' => NULL

    ),
    'contact' => array(
        'title' => 'Moto Club Millau Passion | Nous contacter',
        'description' => 'Les activités de l\'association Moto Club Millau Passion',
        'keywords' => 'Activtés, Tarn, Deux roues, Millau, Passion, Accueil',
        'h1'            => 'Contact',
    ),
    'galerie' => array(
        'title' => 'Moto Club Millau Passion | Notre Galerie Photo',
        'description' => 'Les activités de l\'association Moto Club Millau Passion',
        'keywords' => 'Activtés, Tarn, Deux roues, Millau, Passion, Accueil',
        'h1'            => 'Galerie',
    ),
    'informations' => array(
        'title' => 'Moto Club Millau Passion | Les informations de l\'association',
        'description' => 'Les activités de l\'association Moto Club Millau Passion',
        'keywords' => 'Activtés, Tarn, Deux roues, Millau, Passion, Accueil',
        'h1'            => 'Informations',
    ),
    'presentation' => array(
        'title' => 'Moto Club Millau Passion | Présentation et histoire de làssociation',
        'description' => 'Les activités de l\'association Moto Club Millau Passion',
        'keywords' => 'Activtés, Tarn, Deux roues, Millau, Passion, Accueil',
        'h1'            => 'Présentation',
    ),
);

//valeur par default
$page = 'accueil';

//test si la clef de l'url existe, si oui prend la valeur de l'information URL
if(isset($_GET['page'])){

    //on verifie que la clef esiste bien dans mon tableau $ar_pages_var
    if(array_key_exists($_GET['page'], $ar_pages_var)){

        $page = $_GET['page'];

    }
}

//contenu de variable en fonction de 'page'
$title = $ar_pages_var[$page]['title'];
$description = $ar_pages_var[$page]['description'];
$keywords = $ar_pages_var[$page]['keywords'];

//les includes de contenu layout
include('./includes/layout/header.php');

include('./includes/pages/'.$page.'.php');

include('./includes/layout/footer.php');
