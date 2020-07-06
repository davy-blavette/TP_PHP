<?php
//mon site utilise les sessions
session_start();

if(isset($_GET['session']) AND $_GET['session'] == 'deco'){
    
    //pour détruire la session
    session_destroy();
    //pour actualiser il faut relancer le session start donc on redirige.
    header("location:index.php");

}

//mon fichier config PDO, base de données
include('./includes/config.php');

//par default ma page d'accueil, càd index.php
$pages = array(
    'accueil' => array(
        'title' => 'Chorale à Millau',
        'ogImg' => 'accueil.jpg'),
    'activites' => array(
        'title' => 'Les Activites de la chorale',
        'ogImg' => '??',
    ),
    'membres' => array(
        'title' => 'Membres de la chorale',
        'ogImg' => 'photoContact.jpg',
    ),
    'contact' => array(
        'title' => 'Contacter la chorale',
        'ogImg' => 'photoContact.jpg',
    ),
    'login' => array(
        'title' => 'Veuillez vous connecter',
        'ogImg' => 'photoContact.jpg',
    )

);


//valeur par default
$page = 'accueil';
$root = '/cda01/www/M4/PHP/TP_5';
$title = $pages['accueil']['title'];
$ogImg = $pages['accueil']['ogImg'];

//isset : est-ce que la clef existe ? True / False (la key c'est > pages=)
//empty : est-ce que la valeur est vide ? True / False (la valeur c'est > =activites)
// le ! veut dire 'différent', donc > !empty() : différent de vide
//key_exist(arg1, arg2) est ce que la clef (arg 1) existe dans le tableau (arg2)

if(isset($_GET['page'])){

    //on stock la valeur GET dans une variable afin d'éviter d'analyser a chaque fois l'URL
    $uriPage = $_GET['page'];

    if(!empty($uriPage) AND key_exists($uriPage, $pages)){
        //condition réussi si la clef existe et la valeur de la clef est non-vide

        $page = $uriPage;

        //title est egale a la valeur du tableau $pages a l'index 'page'
        $title = $pages[$page]['title'];
        $ogImg = $pages[$page]['ogImg'];


    }
}


$title = $title." - Polysongs";

//ici mon header
include('./includes/layout/header.php');

//var_dump($_SERVER);
//ici ma page specifique
include('./includes/pages/'.$page.'.php');

//ici mon footer
include('./includes/layout/footer.php');

?>
