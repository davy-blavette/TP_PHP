<?php
//test de la super global $_POST si elle n'est pas vide '!empty()'
if(!empty($_POST)){

    if (isset($_POST['formulaire'])) {

        if ($_POST['formulaire'] == 'register') {

            //var_dump($_POST);


            $droit_image = $_POST["droit_image"] == 'on' ? 1 : 0;
            $cylindree = isset($_POST["cylindree"]) && !empty($cylindree) ? $_POST["cylindree"] : '';

            if (empty($_POST["nom"]) || empty($_POST["prenom"])) {

                $message_modal = 'Vous devez saisir un nom et un prénom.';

            } else {
                //verifier unicité du login ? - TP vérifier unicité du login et gerer la modal -> Login déja pris ?
                //quel algo à réaliser ?

                //hash du mot de passe
                $hashed_password = My_Crypt($_POST["password"]);

                //clean $_POST;
                foreach ($_POST as $key => $value){

                    $_POST[$key] = str_replace(array('<','>'),'?', $value);
                }

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
                "' . $_POST["login"] . '",
                "' . $hashed_password . '",
                "' . $_POST["nom"] . '",
                "' . $_POST["prenom"] . '",
                "' . $_POST["dnaiss"] . '",
                "' . $_POST["adresse1"] . '",
                "' . $_POST["cdpost"] . '",
                "' . $_POST["ville"] . '",
                "' . $_POST["email"] . '",
                "' . $_POST["tel"] . '",
                1,
                ' . $droit_image . ',
                "' . $cylindree . '"
                )';

                //echo "Query : ".$query;

                $bdd->query($query);

                //information modal html
                $message_modal = 'Inscription prise en compte, nous vous recontacterons.';
            }


        } else if ($_POST['formulaire'] == 'update_profil') {

            if(isset($_FILES['image']) && !empty($_FILES['image'])) {



                ///list permet de stocker en variable les valeurs d'un tableau
                list($error, $message_modal, $photoName, $binary, $fileType) = upload_img($directory_img_profil, 'blob');

                //equivalen de
                //$error = $array[0];
                //$message_modal = $array[1];

                if(!$error){

                    $query = 'UPDATE adherent SET Avatar_blob = ?, Avatar_type = ? WHERE IdAdherent = ?';

                    //prepare execute c'est beaucoup mieux, voir injection SQL !
                    $response = $bdd->prepare($query);
                    $result = $response->execute(array($binary, $fileType, $_POST["IdAdherent"]));


                }

                //si pas de nvx password on ne fait pas l'update
                $pass_string = '';

                if(isset($_POST["password"]) && !empty($_POST["password"])){
                    $hashed_password = My_Crypt($_POST["password"]);
                }else{

                    $hashed_password = $_SESSION['password'];

                }

                $query = 'UPDATE adherent SET Login = ?, Password = ?, Prenom = ?, cylindree = ? WHERE IdAdherent = ?';

                //prepare execute c'est beaucoup mieux, voir injection SQL !
                $response = $bdd->prepare($query);
                $result = $response->execute(array($_POST["login"], $hashed_password, $_POST["prenom"], $_POST["cylindree"], $_POST["IdAdherent"]));

                //Attention pensser à mettre a jour les infos de SESSION (fonction ?)
                $_SESSION['password'] = $hashed_password;

                //information modal html
                $message_modal = 'Votre profil est mis à jour.';

            }


        }else if ($_POST['formulaire'] == 'update_news') {

            ///list permet de stocker en variable les valeurs d'un tableau
            list($error, $message_modal, $photoName) = upload_img($directory_img_news);

            //equivalen de
            //$error = $array[0];
            //$message_modal = $array[1];

            if(!$error){
                //requete d'insertion dans la BD
                $query = 'UPDATE nouvelle SET 
                                      Image = "' . $photoName . '"
                                      WHERE IdNouvelle = ' . $_POST["IdNouvelle"];
                $bdd->query($query);

            }


        }else if($_POST['formulaire'] == 'connexion'){

            if(isset($_POST['login']) AND isset($_POST['password'])) {

                //je teste si j'ai des données dans les $_POST
                if (!empty($_POST['login']) and !empty($_POST['password'])) {

                    sleep(3);
                    $hashed_password = My_Crypt($_POST["password"]);
                    //avant
                    //$query = 'SELECT IdAdherent, Nom, Prenom, Admin FROM adherent WHERE Login = "'. $_POST['login'] . '" AND Password = "' . $hashed_password . '"';
                    //lancement de la requete
                    //$reponse = $bdd->query($query);

                    //maintenant pour parer aux injections SQL
                    $query = 'SELECT IdAdherent, Nom, Prenom, Password, Admin FROM adherent WHERE Login = ? AND Password = ?';
                    $reponse = $bdd->prepare($query);
                    $result = $reponse->execute(array($_POST['login'], $hashed_password));


                    //permet de déterminer le nombre d'enregistrement
                    if ($reponse->rowCount() == 1) {

                        //boucle les données récupérées
                        while ($donnees = $reponse->fetch()) {

                            $nom = $donnees['Nom'];
                            $prenom = $donnees['Prenom'];

                            //mes variables de session que je compléte
                            //Attention TP a faire, pensser a update les session sur update profil (fonction ?)
                            $_SESSION['id_adherent'] =  $donnees['IdAdherent'];
                            $_SESSION['nom'] = $nom;
                            $_SESSION['prenom'] = $prenom;
                            $_SESSION['password'] = $donnees['Password'];
                            //ctrl des actions clefs type admin
                            $_SESSION['token'] = '';

                            //ou 2 si admin (to be continued)
                            $user_level = 1;
                            if($donnees['Admin'] == 1){
                                $user_level = 2;
                            }
                            $_SESSION['user_level'] = $user_level;

                            $message_modal = "Bravo ".$prenom." ".$nom." vous êtes connecté!";

                            //retour page par default
                            $page = $homepage;

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



