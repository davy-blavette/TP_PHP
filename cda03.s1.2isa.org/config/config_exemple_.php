<?php

//Server SGBD OVH
$bdd = new PDO(
    'mysql:host=cda03.2isa.org;dbname=cda03_bd1;charset=utf8',
    'cda03',
    'xxxxxxxxxxx');



//Server local dev
$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//Initialisation des variables
//valeur par default
$page = 'accueil';
$message_modal = '';
$mode_level = 0;

/* level = 0 = non-connecté */
/* level = 1 = connecté */
/* level = 2 = connecté admin */

if(isset($_SESSION['mode_level'])){
    $mode_level = $_SESSION['mode_level'];
}


/*
$bdd = new PDO(
    'mysql:host=localhost:3308;dbname=cda03-bd1;charset=utf8',
    'root',
    '');
*/