<!-- index.php - Bases Hacking News -->

<html>

<head>
<div align="center"><h1>Serious Hacking News !</h1></div>
<title>Exploitation d'un directory transversal</title>
</head>

<body>

<?php
if (@$_GET["article"] && file_exists("./tmp/".$_GET["article"]))
echo file_get_contents("./tmp/".$_GET["article"]);
else echo "Veuillez sélectionner un article dans la liste ci-desous :<br><ul><li><a href=\"?article=bienvenue.txt\">Bienvenue</a></li></ul>";
?>

</body>
</html>