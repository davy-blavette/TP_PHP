<?php
//démarage des sessions
session_start();

//mon fichier config PDO, base de données
include('./config/config.php');



//mes librairies PHP
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
include('./includes/pages/'.$page.'.php');

include('./includes/layout/footer.php');
