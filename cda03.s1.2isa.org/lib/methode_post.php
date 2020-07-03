<?php
//test de la super global $_POST si elle n'est pas vide '!empty()'
if(!empty($_POST)){

    if (isset($_POST['formulaire'])){

        if($_POST['formulaire'] == 'register'){

            //var_dump($_POST);


            $droit_image = $_POST["droit_image"] == 'on' ? 1 : 0;
            $cylindree = isset($_POST["cylindree"]) && !empty($cylindree) ? $_POST["cylindree"] : '';



            $query = 'INSERT INTO adherent(
            Login,
            Password,
            Nom,
            Prenom,
            DNaiss,
            Adresse1,
            CdPost,
            Ville,
            Email,
            Tel,
            certificat,
            droit_image,
            cylindree
            ) VALUES (
            "'.$_POST["login"].'",
            "'.$_POST["password"].'",
            "'.$_POST["nom"].'",
            "'.$_POST["prenom"].'",
            "'.$_POST["dnaiss"].'",
            "'.$_POST["adresse1"].'",
            "'.$_POST["cdpost"].'",
            "'.$_POST["ville"].'",
            "'.$_POST["email"].'",
            "'.$_POST["tel"].'",
            1,
            '.$droit_image.',
            "'.$cylindree.'"
            )';

            //echo "Query : ".$query;

            $bdd->query($query);

            //information modal html
            $message_modal = 'Inscription prise en compte, nous vous recontacterons.';

        }else if($_POST['formulaire'] == 'update_profil'){

            $query = 'UPDATE adherent SET 
              Login = "'.$_POST["login"].'",
              Prenom = "'.$_POST["prenom"].'",
              cylindree = "'.$_POST["cylindree"].'"
              WHERE IdAdherent = '.$_POST["IdAdherent"];


            $bdd->query($query);
            //information modal html
            $message_modal = 'Votre profil est mis à jour.'.$query;

        }



    }

};



