<?php

// laissons le salt initialisé par PHP
$hashed_password = hash ('sha256', 'test');

var_dump($hashed_password);

?>