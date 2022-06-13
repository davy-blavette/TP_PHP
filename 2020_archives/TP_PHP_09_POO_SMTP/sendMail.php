<?php
require_once 'lib/MailEngine.php';
use Lib\{MailEngine}; 
//Fichier requete POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if(isset($_POST['action']) AND $_POST['action'] == 'sendMail'){ //verification de l'action du formulaire
    $expediteur = $_POST["data"]["email"]; 
    $subject = $_POST["data"]['subject'];
    $message = $_POST["data"]['message'];
    try {
     MailEngine::send($subject, $expediteur, $message); //send a message via sendinblue
     MailEngine::SendConfirmation($subject, $expediteur);
     echo 'Tout c\'est bien passé';
    }
    catch(Exception $e) {
      echo "Error: $e";
      error_log($e->getMessage());
    }
  }
}