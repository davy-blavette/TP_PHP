<?php



//la requete de la table page
$reponse = $bdd->query('SELECT * FROM page');

//Initialisation de la variable tableau array() PHP
$ar_pages_var = array();


//boucle les données récupérées
while ($donnees = $reponse->fetch()) {

    //ajout des données par index à la variable tableau $ar_pages_var
    $ar_pages_var[$donnees['key_file']] = $donnees;

}


//Superglobal $_GET -> récupération de l'information de l'URL ?page=presentation
//test si la clef de l'url existe, si oui prend la valeur de l'information URL
if(isset($_GET['page']) && !empty($_GET['page']) ){

    //on verifie que la clef esiste bien dans mon tableau $ar_pages_var (fichier valide)
    if(array_key_exists($_GET['page'], $ar_pages_var)){

        //parametre de page
        $page = $_GET['page'];


        //test sur les action de page
        if(isset($_GET['action']) && !empty($_GET['action'])){

            //est-ce que l'action c'est delete ?
            if($_GET['action'] == 'delete'){

                //est-ce qu'on a une valeur d'id ?
                if(isset($_GET['id']) && !empty($_GET['id'])){

                    //lancement de la requete
                    $bdd->query('DELETE FROM adherent WHERE IdAdherent = '.$_GET['id']);

                    //information modal html
                    $message_modal = 'Utilisateur '.$_GET['id'].' supprimé.';

                }
            }
        }
    }
}

//var_dump($ar_pages_var);

//contenu de variable en fonction de 'page'
$title = $ar_pages_var[$page]['metatitle'];
$metadescription = $ar_pages_var[$page]['metadescription'];
$keywords = $ar_pages_var[$page]['keywords'];



