<?php
//test de la super global $_POST si elle n'est pas vide '!empty()'
if(!empty($_POST)){

    if (isset($_POST['formulaire'])){

        if($_POST['formulaire'] == 'register'){

            //var_dump($_POST);


            $droit_image = $_POST["droit_image"] == 'on' ? 1 : 0;
            $cylindree = isset($_POST["cylindree"]) && !empty($cylindree) ? $_POST["cylindree"] : '';

            if(empty($_POST["nom"]) || empty($_POST["prenom"])){

                $message_modal = 'Vous devez saisir un nom et un prénom.';


            }else{
                //verifier unicité du login ? - TP véridier unicité du login et gerer la modal

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
            }



        }else if($_POST['formulaire'] == 'update_profil'){

            $query = 'UPDATE adherent SET 
              Login = "'.$_POST["login"].'",
              Prenom = "'.$_POST["prenom"].'",
              cylindree = "'.$_POST["cylindree"].'"
              WHERE IdAdherent = '.$_POST["IdAdherent"];

            //execution de la requete
            $bdd->query($query);

            //information modal html
            $message_modal = 'Votre profil est mis à jour.';

        }else if($_POST['formulaire'] == 'connexion'){

            if(isset($_POST['login']) AND isset($_POST['password'])) {

                //je teste si j'ai des données dans les $_POST
                if (!empty($_POST['login']) and !empty($_POST['password'])) {

                    $query = 'SELECT IdAdherent, Nom, Prenom FROM adherent WHERE Login = "'. $_POST['login'] . '" AND Password = "' . $_POST['password'] . '"';

                    $reponse = $bdd->query($query);

                    //permet de déterminer le nombre d'enregistrement
                    if ($reponse->rowCount() == 1) {

                        //boucle les données récupérées
                        while ($donnees = $reponse->fetch()) {

                            $nom = $donnees['Nom'];
                            $prenom = $donnees['Prenom'];


                            $_SESSION['id_adherent'] =  $donnees['IdAdherent'];
                            $_SESSION['nom'] = $nom;
                            $_SESSION['prenom'] = $prenom;

                            //ou 2 si admin (to be continued)
                            $mode_level = 1;
                            $_SESSION['mode_level'] = $mode_level;

                            $message_modal = "Bravo ".$prenom." ".$nom." vous êtes connecté!";

                        }

                    } else {
                        $message_modal = "Identifiant ou mot de passe invalide!";
                    };

                    //var_dump('mot de passe OK et login OK');

                }

            }

            //var_dump('vous essayer de vous connecter ?');

        }



    }

};



