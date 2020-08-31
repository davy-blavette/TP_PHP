<?php
include('../config/config.php');
include('./functions.php');
/*
//la requete de la table page
$reponse = $bdd->query('SELECT * FROM adherent');


//boucle les données récupérées
while ($donnees = $reponse->fetch()) {

    $query = 'UPDATE adherent SET Password = ? WHERE IdAdherent = ?';

    //prepare execute c'est beaucoup mieux, voir injection SQL !
    $response = $bdd->prepare($query);
    $result = $response->execute(array(My_Crypt($donnees["Password"]), $donnees["IdAdherent"]));


}
*/