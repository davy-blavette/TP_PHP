<?php
//je teste si j'ai des données qui provienne de mon formulaire
if(isset($_POST['login']) AND isset($_POST['password'])){

    //je teste si j'ai des données dans les $_POST
    if(!empty($_POST['login']) AND !empty($_POST['password'])) {

        $query = 'SELECT ID_ADHERENT, NOM, PRENOM FROM ADHERENT WHERE MAIL = "'. $_POST['login'] . '" AND MOT_DE_PASSE = "' . $_POST['password'] . '"';

        $reponse = $bdd->query($query);

        if ($reponse->rowCount()) {

            //boucle les données récupérées
            while ($donnees = $reponse->fetch()) {

                $nom = $donnees['NOM'];
                $prenom = $donnees['PRENOM'];

                $_SESSION['nom'] = $nom;
                $_SESSION['prenom'] = $prenom;

                echo "Bravo ".$prenom." ".$nom." vous êtes connecté!";

            }

        } else {
            echo "Email ou mot de passe invalide!";
        };

    }
}

?>


<h1>Connexion</h1>

<?php if(isset($_SESSION['nom']) == false){?>

<form method="post" action="?page=login">
    <label>Votre email:</label>
    <input type="text" placeholder="Veuillez saisir un identifiant..." name="login" />
    <label>Votre mot de passe:</label>
    <input type="password" name="password" />
    <input type="submit" value="Connexion" />
</form>

<?php }else{ ?>

    <a href="?session=deco">Déconnexion</a>

<?php } ?>


