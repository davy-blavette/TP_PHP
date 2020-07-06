<?php


//gere la deconnexion
if(isset($_GET['deconnexion']) && $_GET['deconnexion'] == 1){

    //on détruit la session
    session_destroy();
    //on redirige la page apres destroy
    header("location:index.php");

}


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
    //securité - Fail include
    if(array_key_exists($_GET['page'], $ar_pages_var)){

        //parametre de page
        $page = $_GET['page'];


        //test sur les action de page
        if(isset($_GET['action']) && !empty($_GET['action'])){

            //est-ce que l'action c'est delete sur la page membres ?
            if($_GET['action'] == 'delete'){

                //est-ce qu'on a une valeur d'id ?
                if(isset($_GET['id']) && !empty($_GET['id'])){

                    //est-ce que c'est sur la page membre ?
                    if($page == 'membres'){

                        //lancement de la requete
                        $bdd->query('DELETE FROM adherent WHERE IdAdherent = '.$_GET['id']);

                        //information modal html
                        $message_modal = 'Utilisateur '.$_GET['id'].' supprimé.';

                    }else if($page == 'activites'){
                        //ici le code pour gérer les suppressions des activités


                    }

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



