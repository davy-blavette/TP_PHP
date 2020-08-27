<?php

//Server SGBD OVH
$bdd = new PDO(
    'mysql:host=37.187.114.142;dbname=cda03_bd1;charset=utf8',
    'xxx',
    'xxxxx');

//Server local dev
$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//Initialisation des variables
//valeur par default
$homepage = 'accueil';
$page = $homepage;
$message_modal = '';
$wysiwyg = false;
$user_level = 0;

$directory_img_news = "./img/upload/news/";
$directory_img_profil = "./img/upload/profils/";

/* level = 0 = User non-connecté */
/* level = 1 = User connecté */
/* level = 2 = User connecté admin */

if(isset($_SESSION['user_level'])){
    $user_level = $_SESSION['user_level'];
}


/*
$bdd = new PDO(
    'mysql:host=localhost:3308;dbname=cda03-bd1;charset=utf8',
    'root',
    '');
*/