<?php
//test de la super global $_POST si elle n'est pas vide '!empty()'
if(!empty($_POST)){

    if (isset($_POST['formulaire']) && $_POST['formulaire'] == 'register'){

        var_dump($_POST);
/*
 'password' => string 'test password' (length=13)
  'prenom' => string 'test prenom' (length=11)
  'nom' => string 'test nom' (length=8)
  'dnaiss' => string '1980-01-22' (length=10)
  'adresse1' => string 'test adresse' (length=12)
  'cdpost' => string 'Test cp' (length=7)
  'ville' => string 'test ville' (length=10)
  'email' => string 'test@test.com' (length=13)
  'tel' => string 'test tel' (length=8)
  'cylindree' => string '250 cm3' (length=7)
  'droit_image' => string 'on' (length=2)
        */

        $droit_image = $_POST["droit_image"] == 'on' ? 1 : 0;



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
            "'.$_POST["cylindree"].'"
            )';

        echo "Query : ".$query;

        $bdd->query($query);

    }

};



