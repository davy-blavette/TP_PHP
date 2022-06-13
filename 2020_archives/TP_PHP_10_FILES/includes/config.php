<?php
$cnHost = 'mysql:host=localhost;dbname=polysongs;charset=utf8';
$cnUser = 'polyuser';
$cnPassword = 'H6tmGGGCjbJ4Yfq9';
//PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING permet d'afficher les erreurs de type SQL

$bdd = new PDO(
    $cnHost,
    $cnUser,
    $cnPassword,
    array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING)
);