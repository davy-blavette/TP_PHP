<?php

//Superglobal $_GET

//pour afficher les informations du variable
//var_dump($_GET['page']);

//test si la clef de l'url existe
if(isset($_GET['page'])){

    $page = $_GET['page'];

}else{

    $page = 'accueil';

}


include('./includes/layout/header.php');

include('./includes/pages/'.$page.'.php');

include('./includes/layout/footer.php');
