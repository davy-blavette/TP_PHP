<?php


//par default ma page d'accueil, càd index.php

$pages = array(
    'index' => 'Chorale à Millau',
    'activites' => 'Les Activites de la chorale',
    'contact' => 'Contacter la chorale',
    );

//valeur par default
$page = 'index';
$title = $pages['index'];

//stock dans une variable la valeur de l'url GET['page']

//isset : est-ce que la clef existe ? True / False (la key c'est > pages=)
//empty : est-ce que la valeur est vide ? True / False (la valeur c'est > =activites)
// le ! veut dire 'différent'vdonc > !empty() : différent de vide
//key_exist(arg1, arg2) est ce que la clef (arg 1) existe dans le tableau (arg2)

if(isset($_GET['page'])){

    $uriPage = $_GET['page'];

    if(!empty($uriPage) AND key_exists($uriPage, $pages)){
        //condition réussi si la clef existe et la valeur de la clef est non-vide

        $page = $uriPage;

        //title est egale a la valeur du tableau $pages a l'index 'activites'
        $title = $pages[$page];

    }
}




//ici mon header
include('./includes/layout/header.php');

//ici ma page specifique
include('./includes/pages/'.$page.'.php');

//ici mon footer
include('./includes/layout/footer.php');

?>
