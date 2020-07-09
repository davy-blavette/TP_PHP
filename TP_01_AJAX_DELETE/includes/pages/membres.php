<h1>Liste des membres</h1>

<?php

//valeurs par default du formulaire insert/update
$actForm = "insert";
//variable qui est égale à rien
$id_adherent = $nom = $prenom = $mail = $passe = $pupitre = "";

if(isset($_POST['action'])){

    //le formulaire avec action INSERT
    if($_POST['action'] == 'insert'){
    $query = 'INSERT INTO adherent(
            NOM,
            PRENOM,
            MAIL,
            MOT_DE_PASSE,
            ID_PUPITRE
            ) VALUES (
            "'.$_POST["name"].'",
            "'.$_POST["firstname"].'",
            "'.$_POST["email"].'",
            "'.$_POST["password"].'",
            "'.$_POST["pupitre"].'"
            )';
    }else if($_POST['action'] == 'update'){
        //le formulaire avec action UPDATE
        $query = 'UPDATE adherent SET 
          NOM = "'.$_POST["name"].'",
          PRENOM = "'.$_POST["firstname"].'",
          MAIL = "'.$_POST["email"].'",
          MOT_DE_PASSE = "'.$_POST["password"].'",
          ID_PUPITRE = "'.$_POST["pupitre"].'" WHERE ID_ADHERENT = '.$_POST["id_adherent"];
    }

    $bdd->query($query);

}



//tester si la key action existe avant d'appeler sa valeur
if(isset($_GET['action'])){

    if($_GET['action'] == 'delete'){
        //je supprime en recuperant l'id dans l'url (ligne 23)
        $bdd->query('DELETE FROM adherent WHERE ID_ADHERENT = '.$_GET['id']);

    }else if($_GET['action'] == 'update'){

        //je récupére les informations de l'adhérent de $_GET[ID]
        $reponse = $bdd->query('SELECT * FROM adherent WHERE ID_ADHERENT = '.$_GET['id']);

        while ($donnees = $reponse->fetch()) {

            //on stock les donnees de la BD dans des variables
            $id_adherent = $donnees['ID_ADHERENT'];
            $nom = $donnees['NOM'];
            $prenom = $donnees['PRENOM'];
            $mail = $donnees['MAIL'];
            $passe = $donnees['MOT_DE_PASSE'];
            $pupitre = $donnees['ID_PUPITRE'];

        }

        $actForm = "update";

    }

}

//la requete
$reponse = $bdd->query('SELECT ID_ADHERENT, NOM, PRENOM FROM adherent');

echo "<table id='members'><tbody><th>Prénom</th><th>Nom</th>";

//boucle les données récupérées
while ($donnees = $reponse->fetch()) {

    //affichage des données
    //lien avec deux clefs pour réafficher la page et la supprimer
    echo '<tr><td>'.$donnees['PRENOM'].'</td><td>'.$donnees['NOM'].'</td><td><a href="?page=membres&action=delete&id='.$donnees['ID_ADHERENT'].'">Supprimer</a></td><td><a href="?page=membres&action=update&id='.$donnees['ID_ADHERENT'].'">Modifier</a><button data-member="'.$donnees['ID_ADHERENT'].'" class="btn btn-warning">Supprimer</button></td></tr>';

}

echo "</tbody></table>";


?>
<form method="post" action="">
    <input type="hidden" name="action" value="<?php echo $actForm; ?>"/>
    <input type="hidden" name="id_adherent" value="<?php echo $id_adherent; ?>"/>

    <label>Nom : </label>
    <input type="text" name="name" value="<?php echo $nom ?>" />
    <label>Prénom : </label>
    <input type="text" name="firstname"  value="<?php echo $prenom ?>" />
    <label>Email : </label>
    <input type="email" name="email" value="<?php echo $mail ?>" />
    <label>Mot de passe : </label>
    <input type="password" name="password" value="<?php echo $passe ?>" />
    <label>Pupitre : </label>
    <select name="pupitre">

        <?php
        //la requete de spupitres
        $reponse = $bdd->query('SELECT ID_PUPITRE, LIBELLE FROM pupitre ORDER BY LIBELLE ASC');

        while ($donnees = $reponse->fetch()) { ?>

            <option <?php if($donnees['ID_PUPITRE'] == $pupitre){echo 'selected';} ?> value="<?php echo $donnees['ID_PUPITRE'] ?>"><?php echo $donnees['LIBELLE'] ?></option>

        <?php } ?>

    </select>
    <input type="submit" value="Envoyer" />

</form>

<div id="responseAjax">

</div>
