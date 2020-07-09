<?php
include('./config.php');

echo "je supprime le membre : ".$_GET['member'];

$bdd->query('DELETE FROM adherent WHERE ID_ADHERENT = '.$_GET['member']);
