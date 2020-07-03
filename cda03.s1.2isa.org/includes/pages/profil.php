<main>

    <?php

    if(isset($_GET['id']) && !empty($_GET['id'])){

    //la requete de la table page
    $reponse = $bdd->query('SELECT * FROM adherent WHERE IdAdherent = '.$_GET['id']);


        //boucle les données récupérées
        while ($donnees = $reponse->fetch()) {

            $identifiant = $donnees['Login'];
            $nom = $donnees['Nom'];
            $prenom = $donnees['Prenom'];
            $login = $donnees['Login'];
            $cylindree = $donnees['cylindree'];
            //to be continued

        }

        $ar_pages_var[$page]['h1'] = $prenom.' '.$nom;
        $id = $_GET['id'];

    }



    $title_register = 'Mise à jour de votre profil';
    $btn_register = 'Mettre à jour';
    $action = 'update_profil';

    include('./includes/tmpl/head_breadcrumb.php');
    include('./includes/tmpl/register.php');

    ?>

</main>
