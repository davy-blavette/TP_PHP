<?php

//mon fichier config PDO, base de données
include('./config/config.php');



//var_dump() - pour afficher les informations de variable
//var_dump($_GET['page']);



//la requete
$reponse = $bdd->query('SELECT * FROM page');

//Initialisation de la variable tableau array() PHP
$ar_pages_var = array();


//boucle les données récupérées
while ($donnees = $reponse->fetch()) {

    //ajout des données par index à la variable tableau $ar_pages_var
    $ar_pages_var[$donnees['key_file']] = $donnees;

}


//valeur par default
$page = 'accueil';

//Superglobal $_GET -> récupération de l'information de l'URL ?page=presentation
//test si la clef de l'url existe, si oui prend la valeur de l'information URL
if(isset($_GET['page'])){

    //on verifie que la clef esiste bien dans mon tableau $ar_pages_var (fichier valide)
    if(array_key_exists($_GET['page'], $ar_pages_var)){

        $page = $_GET['page'];

    }
}

//var_dump($ar_pages_var);

//contenu de variable en fonction de 'page'
$title = $ar_pages_var[$page]['metatitle'];
$metadescription = $ar_pages_var[$page]['metadescription'];
$keywords = $ar_pages_var[$page]['keywords'];

//les includes de contenu layout
include('./includes/layout/header.php');

//include du fichier de page reprenant la $page
include('./includes/pages/'.$page.'.php');

include('./includes/layout/footer.php');
