<?php

//démarage des sessions
session_start();

//mon fichier config PDO, base de données
include('../config/config.php');
$msg = array();

if($user_level == 2){

    if(!empty($_POST)) {

        if (isset($_POST['informations']) && $_POST['informations'] == 1) {

            if(isset($_POST['description']) && !empty($_POST['description'])){

            $query = 'INSERT INTO nouvelle(
                Titre,
                Texte                
                ) VALUES (
                "'.$_POST["title"].'",
                "'.$_POST["description"].'"            
            )';

            $bdd->query($query);

            //$bdd->lastInsertId() recupere l'id créé automatiquement
            $donnees['IdNouvelle']= $bdd->lastInsertId();
            $donnees['Titre'] = $_POST["title"];

            $msg['modal'] = 'Ajout d\'une nouvelle.';
            $msg['tmpl'] = '<a href="./index.php?page=information&id='.$donnees['IdNouvelle'].'">'.$donnees['Titre'].'</a>';

            //include ('../includes/tmpl/news_breadcrumb.php');


            }

        }

    }

}else{

    $msg['modal'] = 'Vous n\'etes pas authorisé à appeller cette methode.';

}

echo json_encode($msg);