<?php

if(Isset($_GET['page'])){
	
	$page = $_GET['page'];
	
}

if (empty($page)) {
 $page = "accueil";
 // On limite l'inclusion aux fichiers.php en ajoutant dynamiquement l'extension
 // On supprime également d'éventuels espaces
 $page = trim($page.".php");

}

// On évite les caractères qui permettent de naviguer dans les répertoires
$page = str_replace("../","protect",$page);
$page = str_replace(";","protect",$page);
$page = str_replace("%","protect",$page);


// On interdit l'inclusion de dossiers protégés par htaccess
// Le "i" après le délimiteur du pattern indique que la recherche ne sera pas sensible à la casse
if (preg_match("/admin/i",$page)) {
 echo "Vous n'avez pas accès à ce répertoire";
 }

else {

    // On vérifie que la page est bien sur le serveur
    if (file_exists($page) && $page != 'index.php') {
       include("./tmp/".$page); 
    }

    else {
        echo "Page inexistante !";
    }
}
?>