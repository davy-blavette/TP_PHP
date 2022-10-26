<?php ob_start(); //  ne pas modifier
$titre = "Exercices PHP"; // Mettre le titre de la page
?>

<!-- mettre le code ici -->
<div class="row">
    <div class="col s12">
        <?=phpinfo();?>
        <style type="text/css">
        	a:link {color: none; text-decoration: none; background-color: none;}
			a:hover {text-decoration: none;}
        </style>
    </div>
<?php
/**
 * Ne pa modifier
 * permet d'inclure le menu et le template
 */
$content = ob_get_clean();
require "../partials/layout.php";
?>