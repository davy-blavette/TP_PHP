<h1>Liste des membres</h1>

<?php

if(isset($_POST['action']) AND $_POST['action'] == 'insert'){

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

        $bdd->query($query);

}



//tester si la key action existe avant d'appeler sa valeur
if(isset($_GET['action']) AND $_GET['action'] == 'delete'){

    //je supprime en recuperant l'id dans l'url (ligne 23)
    $bdd->query('DELETE FROM adherent WHERE ID_ADHERENT = '.$_GET['id']);

}

//la requete
$reponse = $bdd->query('SELECT ID_ADHERENT, NOM, PRENOM FROM adherent');

echo "<table><tbody><th>Prénom</th><th>Nom</th>";

//boucle les données récupérées
while ($donnees = $reponse->fetch()) {

    //affichage des données
    //lien avec deux clefs pour réafficher la page et la supprimer
    echo '<tr><td>'.$donnees['PRENOM'].'</td><td>'.$donnees['NOM'].'</td><td><a href="?page=membres&action=delete&id='.$donnees['ID_ADHERENT'].'">Supprimer</a></td></tr>';

}

echo "</tbody></table>";


?>
<form method="post" action="">
    <input type="hidden" name="action" value="insert"/>

    <label>Nom : </label>
    <input type="text" name="name" />
    <label>Prénom : </label>
    <input type="text" name="firstname" />
    <label>Email : </label>
    <input type="email" name="email" />
    <label>Mot de passe : </label>
    <input type="password" name="password" />
    <label>Pupitre : </label>
    <select name="pupitre">
        <option value="1">Alto</option>
        <option value="2">Soprano</option>
        <option value="3">Ténor</option>
        <option value="4">Basse</option>
    </select>
    <input type="submit" value="Envoyer" />

</form>

