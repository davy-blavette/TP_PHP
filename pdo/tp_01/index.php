<?php ob_start(); //  ne pas modifier
$titre = "Exo 01 - Se connecter"; // Mettre le titre de la page
?>
<p>Utilisez vos identifiants de connexion pour vous connecter à MySQL en utilisant PDO.<br>
Vous devez obtenir le résultat suivant :<br><br>
</p>

<!-- mettre votre code ici -->
<?php

 // Déclaration des variables
 $serverName = 'lab018.2isa.org';
 $dbName = 'db1';
 $userName = 'root';
 $port = '33018';
 $pwd = '6214lab018';          

 // Connexion à la base de données
 try{
 	$dbCon = new PDO("mysql:host=$serverName;dbname=$dbName;port=$port;charset=UTF8", $userName, $pwd);
 	echo "Connected to $serverName<br>";
 	var_dump($dbCon); 
 }catch(Exception $e){
 	die('Erreur : ' . $e->getMessage());
 };
    
?>

<?php
    /**
     * Ne pa modifier
     * permet d'inclure le menu et le template
     */
    $content = ob_get_clean(); 
    require "../../../partials/layout.php";
?>