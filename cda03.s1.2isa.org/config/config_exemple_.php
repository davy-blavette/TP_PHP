<?php

//Server SGBD OVH
$bdd = new PDO(
    'mysql:host=cda03.2isa.org;dbname=cda03_bd1;charset=utf8',
    'cda03',
    'xxxxxxxxxxx');


//Server local dev
/*
$bdd = new PDO(
    'mysql:host=localhost:3308;dbname=cda03-bd1;charset=utf8',
    'root',
    '');
*/