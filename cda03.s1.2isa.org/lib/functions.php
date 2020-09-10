<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

function upload_img($directory, $methode = 'file'){

    $error = true;
    $photoName = '';
    $fileType = '';
    $binary = '';

    if(isset($_FILES['image']) && !empty($_FILES['image'])) {

        //les différentes clef de $_FILES
        $fileName = $_FILES['image']['name']; //01.02.JPG
        $fileType = $_FILES['image']['type'];//type de fichier dans l'entete du fichier = manipulable
        $fileTmp = $_FILES['image']['tmp_name'];//nom temporaire du fichier sur le serveur APACHE avant traitement
        $fileError = $_FILES['image']['error'];
        $fileSize = $_FILES['image']['size'];

        //mes variable de config
        $limitSize = 2097152;//votre limitte d'acception de la taille du fichier

        $validExtention = array('png', 'jpeg', 'jpg', 'gif');

        //Trouver l'extention du fichier
        $nameArray = explode(".", $fileName); //array("01","JGP") -> 2 élements
        $lastIndex = count($nameArray) - 1;//total des éléments (2) mais je veux trouver le dernier index
        //array[0] = "01"
        //array[1] = "JPG"
        $extention = strtolower($nameArray[$lastIndex]);//deux elements dans le tb, mais -1 pour l'index du dernier element car index commence a zero

        //est-ce que l'extention est dans le tableau de mes extentions
        if (in_array($extention, $validExtention)) {

            //nom de mon fichier
            $photoName = time() . "." . $extention;

            //la limite est elle valide ?
            if ($limitSize > $fileSize) {


                if($methode == 'blob'){

                    $binary = file_get_contents($fileTmp);
                    // et $fileType

                }else{
                    //fonction d'upload sur le serveur
                    move_uploaded_file($fileTmp, $directory . $photoName);

                }


                $error = false;
                $message_modal = "News update";

            } else {

                $message_modal = "extention non valide";

            }


        } else {

            $message_modal = "Fichier trop gros (" . ($limitSize / 1000000) . " Mo max)";

        }

    }else{
        $message_modal = "Pas de fichier Upload";


    }

    return array($error, $message_modal, $photoName, $binary, $fileType);

}

//Completer la fonction avec votre propre methode de cryptage sur base sha256 + une boucle, un salt (clé secrete ?)
function My_Crypt($password){

    //on peut utiliser une boucle pour de 64 et remelanger les lettres ?
    //on peut ajouter un Salt (un mot secret) a concatener avec pass word ?
    //puis peut etre creer une fonction decript du salt ?


    return hash ('sha256', $password);



}

function sendMail($name, $email, $message){

    require './PHPMailer-master/src/Exception.php';
    require './PHPMailer-master/src/PHPMailer.php';
    require './PHPMailer-master/src/SMTP.php';

    $mail = new PHPMailer(true);                              // Passing `true` enables exceptions
    try {
        //Server settings
        $mail->SMTPDebug = 2;                                 // Enable verbose debug output
        $mail->isSMTP();                                      // Set mailer to use SMTP
        $mail->Host = 'smtp.gmail.com';                                 // Specify main and backup SMTP servers in-v3.mailjet.com
        $mail->SMTPAuth = true;                               // Enable SMTP authentication
        $mail->Username = 'cda.2isa@gmail.com';                             // SMTP username 7ec368ea4654113c7062e2f3b16f7bb3
        $mail->Password = 'xxxxx';                             // SMTP password 7db0c1207cb076ea0b68ffe7b9ea49e5
        $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
        $mail->Port = 587;                                    // TCP port to connect to
//        $mail->CharSet = 'UTF-8';

        //Recipients
        $mail->setFrom('cda.2isa@gmail.com', 'Formulaire');
        $mail->addAddress('davy.blavette@2isa.com', 'Admin');     // Add a recipient
//    $mail->addAddress('patrick.nardi@2isa.org');               // Name is optional
        $mail->addReplyTo($email, $name);
//    $mail->addCC('jean-yves.fontenil@2isa.org');
//    $mail->addBCC('pauline.ivaldi-rancurel@2isa.org');

        //Attachments
//    $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//    $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

        //Content
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = "Demande d'information en provenance du site internet";
        $mail->Body    = 'Name: '.$name.'<br/>Email:'.$email.'<br/>Message:'.$message;

        $mail->send();
        return 'Message envoyé';
    } catch (Exception $e) {
        return 'Erreur message, veuillez réessayer ultérieument ';
        //. $mail->ErrorInfo - pour debug
    }


}