<?php

//mon fichier config PDO, base de données
include('./config/config.php');

//Superglobal $_GET

//pour afficher les informations du variable
//var_dump($_GET['page']);



//la requete
$reponse = $bdd->query('SELECT * FROM page');

//push tableau array() PHP
$ar_pages_var = array();


//boucle les données récupérées
while ($donnees = $reponse->fetch()) {

    //courage !
    $ar_pages_var[$donnees['key_file']] = $donnees;

}


//valeur par default
$page = 'accueil';

//test si la clef de l'url existe, si oui prend la valeur de l'information URL
if(isset($_GET['page'])){

    //on verifie que la clef esiste bien dans mon tableau $ar_pages_var
    if(array_key_exists($_GET['page'], $ar_pages_var)){

        $page = $_GET['page'];

    }
}

//var_dump($ar_pages_var);

//contenu de variable en fonction de 'page'
$title = $ar_pages_var[$page]['metatitle'];
$description = $ar_pages_var[$page]['metadescription'];
$keywords = $ar_pages_var[$page]['keywords'];

//les includes de contenu layout
include('./includes/layout/header.php');

include('./includes/pages/'.$page.'.php');

include('./includes/layout/footer.php');
