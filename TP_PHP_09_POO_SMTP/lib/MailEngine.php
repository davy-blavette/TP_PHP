<?php
namespace Lib;

require_once "Vendors/PHPMailer/src/PHPMailer.php";
require_once "config.php";

use PHPMailer\PHPMailer\{PHPMailer};
use Config\{Configuration};

class MailEngine {
  //Create a mail with the global configuration
  public static function CreateMail() {
    $mail = new PHPMailer(true);
    
    //Config
    $mail->SMTPDebug = Configuration::smtpConfig['SMTPDebug'];
    if (Configuration::smtpConfig['isSMTP']) $mail->isSMTP();
    $mail->Host = Configuration::smtpConfig['host'];
    $mail->SMTPAuth = Configuration::smtpConfig['SMTPAuth'];
    $mail->Username = Configuration::smtpConfig['Username'];
    $mail->Password = Configuration::smtpConfig['Password'];
    $mail->SMTPSecure = Configuration::smtpConfig['SMTPSecure'];
    $mail->Port = Configuration::smtpConfig['Port'];
    
    //From header mail
    $mail->setFrom(Configuration::smtpConfig['From']['Address'], Configuration::smtpConfig['From']['Name']);

    return $mail;
  }

  // Create a mail and send it
  public static function Send(string $subject, string $expediteur, string $message) {
    $mail = MailEngine::CreateMail();
    $mail->addAddress(Configuration::smtpConfig['Administrator']['Address'], Configuration::smtpConfig['Administrator']['Name']);
    $mail->addReplyTo($expediteur);
    $mail->isHTML(true); // Set email format to HTML
    $mail->Subject = $subject;
    $mail->Body = "<p>".htmlspecialchars($message)."<p>";
    $mail->AltBody = strip_tags($message);
    try {
      $mail->send();
    }
    catch(Exception $e) {
      throw new Exception($e->getMessage());
    }
  }

  //Create a mail and send the confirmation mail to the client
  public static function SendConfirmation($subject, $expediteur) {
    $mail = MailEngine::CreateMail();
    $mail->addAddress($expediteur);
    $mail->addReplyTo(Configuration::smtpConfig['From']['Address']);
    $mail->isHTML(true); // Set email format to HTML
    $mail->Subject = $subject;
    $message = '<p>Votre question ('.$subject.') est bien prise en charge par nos services.<p>';
    $mail->Body = $message;
    $mail->AltBody = strip_tags($message);
    try {
      $mail->send();      
    }
    catch(Exception $e) {
      throw new Exception($e->getMessage());
    }
  }
}