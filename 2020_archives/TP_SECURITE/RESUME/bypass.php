<?php

session_start();

//je me connecte
if($connect == true){

$cookie_name = "ticket";
// On génère quelque chose d'aléatoire
$ticket = session_id().microtime().rand(0,9999999999);
// on hash pour avoir quelque chose de propre qui aura toujours la même forme
$ticket = hash('sha512', $ticket);

// On enregistre des deux cotés
setcookie($cookie_name, $ticket, time() + (60 * 20)); // Expire au bout de 20 min
$_SESSION['ticket'] = $ticket;
}

?>

Puis pour le vérifications :
A chaque changement de page

<?php

	
//session_start();

if(isset($_SESSION['nom'])){
    if (isset($_COOKIE['ticket']) AND $_COOKIE['ticket'] == $_SESSION['ticket'])
    {
        $ticket = session_id().microtime().rand(0,9999999999);
        $ticket = hash('sha512', $ticket);
        $_SESSION['ticket'] = $ticket;
        setcookie('ticket', $ticket, time() + (60 * 20)); // Expire au bout de 20 min

    }
    else
    {
        // On détruit la session
        //$_SESSION = array();
        session_destroy();
        unset($_COOKIE['ticket']);
        header('location:index.php');
    }
}

?>
