<?php
include('config.php');

$ctrl = "false";

if(isset($_POST['action']) AND $_POST['action'] = 'updateArticle'){

    $id = $_POST['id'];
    $title = $_POST['title'];
    $intro = $_POST['intro'];
    $desc = $_POST['desc'];

    //le formulaire avec action UPDATE
    $query = 'UPDATE activites SET TITRE = ?, INTRODUCTION = ?, DESCRIPTION = ? WHERE ID_ACTIVITE = ?';

    $response = $bdd->prepare($query);

    $result = $response->execute(array($title, $intro, $desc, $id));

    if($result){

        $ctrl = "true";

    }else{

        $ctrl = "false";

    }

}else{

    $ctrl = "false";

}

echo json_encode(array("ctrl" => $ctrl));
