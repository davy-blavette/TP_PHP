<?php

//démarage des sessions
session_start();

//mon fichier config PDO, base de données
include('../config/config.php');

if(isset($_GET['user']) && !empty($_GET['user'])){

    $query = 'SELECT Avatar_blob, Avatar_type FROM adherent WHERE IdAdherent = ?';

    //prepare execute c'est beaucoup mieux, voir injection SQL !
    $response = $bdd->prepare($query);
    $result = $response->execute(array($_GET['user']));
    $data = $response->fetch();

    header('Content-type:'.$data['Avatar_type']);
    echo $data['Avatar_blob'];

}

?>