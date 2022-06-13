<?php

if(isset($_GET['cookie'])){

echo "La session ID de l'utilisateur connecté sur le site DL10 est -> ".$_GET['cookie'];

header("location:".$_GET['uri']);

}

 ?>