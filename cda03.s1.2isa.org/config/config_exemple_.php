<?php

//Server SGBD OVH
$bdd = new PDO(
    'mysql:host=cda03.2isa.org;dbname=cda03_bd1;charset=utf8',
    'cda03',
    'xxxxxxxxxxx');


//Server local dev
/*
//Server local dev
//$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$bdd = new PDO(
    'mysql:host=localhost:3308;dbname=cda03-bd1;charset=utf8',
    'root',
    '');
*/