<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require './lib/vendor/PHPMailer-master/src/Exception.php';
require './lib/vendor/PHPMailer-master/src/PHPMailer.php';
require './lib/vendor/PHPMailer-master/src/SMTP.php';

$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
    //Server settings
    $mail->SMTPDebug = 2;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'in-v3.mailjet.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = '7ec368ea4654113c7062e2f3b16f7bb3';                 // SMTP username
    $mail->Password = '7db0c1207cb076ea0b68ffe7b9ea49e5';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('davy.blavette@2isa.com', 'Mailer');
    $mail->addAddress('davy.blavette@2isa.com', 'Davy Blavette');     // Add a recipient
//    $mail->addAddress('patrick.nardi@2isa.org');               // Name is optional
    $mail->addReplyTo('edouard.phan@2isa.org', 'Edouard');
//    $mail->addCC('jean-yves.fontenil@2isa.org');
//    $mail->addBCC('pauline.ivaldi-rancurel@2isa.org');

    //Attachments
//    $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//    $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = "Demande de votre mot de passe";
    $mail->Body    = 'Bonjour<br/>, veuillez me transferer votre code client ainsi que votre mot de passe <b>urgement!</b>';
//    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}
