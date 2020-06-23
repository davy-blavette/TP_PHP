<?php

if(isset($_GET['page']) AND !empty($_GET['page']) ){

    echo "oui j'ai une page > ".$_GET['page'];
    $page = $_GET['page'];

}else{
    echo "j'ai pas de page";
    $page = 'index';
}

$title = 'Accueil';
///$title = 'Activites';
//$title = 'Contact';


include('./includes/layout/header.php');

include('./includes/pages/'.$page.'.php');

include('./includes/layout/footer.php');

?>
