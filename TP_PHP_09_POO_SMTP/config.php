<?php
namespace Config;
require_once "Vendors/PHPMailer/src/PHPMailer.php";
require_once "Vendors/PHPMailer/src/SMTP.php";
require_once "Vendors/PHPMailer/src/Exception.php";
use PHPMailer\PHPMailer\{PHPMailer, SMTP};

class Configuration {
  const smtpConfig = array(
    'SMTPDebug' => SMTP::DEBUG_OFF,
    'isSMTP' => true,
    'host' => 'smtp-relay.sendinblue.com', //address server smtp,
    'SMTPAuth' => true,
    'Username' => 'davy.blavette@2isa.com',
    'Password' => 'kn2WvLmM7bNU0BE6',  
    'SMTPSecure' => PHPMailer::ENCRYPTION_SMTPS,
    'Port' => 465,
    'From' => array('Address' => 'no-reply@mon-site.fr', 'Name' => 'NoNameSite'), // email and name of the site web
    'Administrator' => array('Address' => 'fb@2isa.com', 'Name' => 'Fabien Belugou'), //  administrator (email and name) of this site web
  );

}