<?php ob_start(); //  ne pas modifier
$titre = "Exo 01 - Variables"; // Mettre le titre de la page
?>
<p>Vous devrez initialiser 3 variables (a, b et c) contenant respectivement les valeurs (3, 5 et 7). </p>
<!-- HTML generated using hilite.me --><div style="background: #ffffff; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%">$a = 3;
$b = 5;
$c = 7; 
</pre></div>

<!-- mettre votre code ici -->
<?php

    $a = 3;
    $b = 5;
    $c = 7;

    echo "<p>";
    echo "********** Avant permuttation ********** <br>";
    echo "A : $a <br>";
    echo "B : $b <br>";
    echo "C : $c <br>";
    echo "</p>";

    //Solution
    $tmp = $a;
    $a = $b;
    $b = $c;
    $c = $tmp;

    echo "<p>";
    echo "********** Après permuttation ********** <br>";
    echo "A : $a <br>";
    echo "B : $b <br>";
    echo "C : $c <br>";
    echo "</p>";
    
?>

<?php
    /**
     * Ne pa modifier
     * permet d'inclure le menu et le template
     */
    $content = ob_get_clean(); 
    require "../../../partials/layout.php";
?>