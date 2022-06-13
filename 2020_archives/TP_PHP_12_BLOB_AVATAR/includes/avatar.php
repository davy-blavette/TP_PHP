<?php
include('config.php');
if ( isset($_GET['id']) )
{
    $id = $_GET['id'];

    $query = 'SELECT AVATAR, AVATAR_TYPE FROM ADHERENT WHERE ID_ADHERENT = '.$id;

    $reponse = $bdd->query($query);

    if ($reponse->rowCount()) {

        //boucle les données récupérées
        while ($donnees = $reponse->fetch()) {


                header ("Content-type: ".$donnees['AVATAR_TYPE']);
                echo $donnees['AVATAR'];


        }

    } else {
        echo "Id d'image inconnu";
    };





}
else
{
    echo "Mauvais id d'image";
}
?>
