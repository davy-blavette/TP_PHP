<?php ob_start(); //  ne pas modifier
$titre = "Exo 02 - Données"; // Mettre le titre de la page
?>
<p>Réaliser les requétes avec PDO permettant de créer la table Clients et insérer les données suivantes :<br>
<ul>
	<li>Nom</li>
	<li>Prenom</li>
	<li>Adresse</li>
	<li>Ville</li>
	<li>Codepostal</li>
	<li>Pays</li>
	<li>Mail</li>
</ul>
<p>'Doe','John','rue des trucs','Millau','12100','France','john.doe@example'</p>
<p>'Bond','James','rue des gadgets','Toulouse','31','France','james.bond@ex ample.com'</p>

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
 	$db = new PDO("mysql:host=$serverName;dbname=$dbName;port=$port;charset=UTF8", $userName, $pwd);
 	echo "Connected to $serverName<br>";

	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


	$sql = "CREATE TABLE IF NOT EXISTS Clients (
	Id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	Nom VARCHAR(30) NOT NULL,
	Prenom VARCHAR(30) NOT NULL, Adresse VARCHAR(70) NOT NULL, Ville VARCHAR(30) NOT NULL,
	Codepostal VARCHAR(30) NOT NULL, Pays VARCHAR(30) NOT NULL,
	Mail VARCHAR(50) NOT NULL,
	DateInscription TIMESTAMP DEFAULT CURRENT_TIMESTAMP)
	DEFAULT CHARACTER SET utf8 DEFAULT COLLATE utf8_general_ci";

	$db->exec($sql);

	echo 'Table bien créée !';

	$sql1 = "INSERT INTO Clients(Nom,Prenom,Adresse,Ville,Codepostal,Pays,Mail) VALUES('Doe','John','rue des trucs','Millau','12100','France','john.doe@example
	.com')";

	$db->exec($sql1);

	echo 'Entrées ajoutées dans la table !';

	$sql2 = "INSERT INTO Clients(Nom,Prenom,Adresse,Ville,Codepostal,Pays,Mail)
	VALUES('Bond','James','rue des gadgets','Toulouse','31','France','james.bond@ex ample.com')";

	$db->exec($sql2);


	echo 'Entrées ajoutées dans la table !';

 }catch(Exception $e){
 	 	echo 'Erreur : ' . $e->getMessage();
 		//die('Erreur : ' . $e->getMessage());
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