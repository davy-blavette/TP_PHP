<?php
//démarage des sessions
session_start();


//mon fichier config PDO, base de données
include('./config/config.php');

//controle du vol de session, BYPASS
//
if(isset($_SESSION['nom']) AND !empty($_SESSION['nom'])){

    if (isset($_COOKIE['bypass']) AND $_COOKIE['bypass'] == $_SESSION['bypass'])
    {
        //        var_dump( $_COOKIE['ticket']);
        //        var_dump( $_SESSION['ticket']);
        //var_dump(time());
        $message_modal = 'Ticket valide';
        $ticket = session_id().microtime().rand(0,9999999999);
        $ticket = hash('sha512', $ticket);
        $_SESSION['bypass'] = $ticket;
        setcookie('bypass', $ticket, time() + (60 * 20), '/'); // Expire au bout de 20 min
    }
    else
    {
        session_destroy();
        header("location:index.php");
    }
}


//mes librairies PHP

//mes fonctions PHP
include('./lib/functions.php');

//Gestion des formulaire type $_POST
include('./lib/methode_post.php');

//Gestion des données URL type $_GET
//Affichage des pages
include('./lib/methode_get.php');




//var_dump() - pour afficher les informations de variable
//var_dump($_GET['page']);





//les includes de contenu layout
include('./includes/layout/header.php');

//include du fichier de page reprenant la $page
//securité array_key_exist & extention en dur
include('./includes/pages/'.$page.'.php');

include('./includes/layout/footer.php');
