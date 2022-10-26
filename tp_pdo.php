<?php ob_start(); //  ne pas modifier
$titre = "Exercices PHP"; // Mettre le titre de la page
?>

<!-- mettre le code ici -->
<div class="row">
    <h2 class="center-align">TP PDO</h2>
    <p>L’objectif de ce cas pratique est de pouvoir manipuler nos bases de données MySQL en PHP .</p>
    <div class="divider"></div>

    <div class="col s12 m6 l4">
        <div class="card medium teal darken-2">
            <div class="card-content white-text">
                <span class="card-title center-align">01 - Se connecter</span>
                <p>Se connecter à une base de données.</p>
            </div>
            <div class="card-action">
                <a href="pdo/tp_01/index.php" class="valign-wrapper">exercice <i class="material-icons">arrow_forward</i></a>
            </div>
        </div>
    </div>

    <div class="col s12 m6 l4">
        <div class="card medium teal darken-2">
            <div class="card-content white-text">
                <span class="card-title center-align">02 - Données</span>
                <p>Se connecter à une base de données.</p>
            </div>
            <div class="card-action">
                <a href="pdo/tp_02/index.php" class="valign-wrapper">exercice <i class="material-icons">arrow_forward</i></a>
            </div>
        </div>
    </div>


    <div class="col s12 m6 l4">
        <div class="card medium teal darken-2">
            <div class="card-content white-text">
                <span class="card-title center-align">03 - Execute(array)</span>
                <p>Utiliser les requêtes préparées.</p>
            </div>
            <div class="card-action">
                <a href="pdo/tp_03/index.php" class="valign-wrapper">exercice <i class="material-icons">arrow_forward</i></a>
            </div>
        </div>
    </div>


    <div class="col s12 m6 l4">
        <div class="card medium teal darken-2">
            <div class="card-content white-text">
                <span class="card-title center-align">04 - Execute(array) et marqueurs interrogatifs</span>
                <p>Utiliser les requêtes préparées.</p>
            </div>
            <div class="card-action">
                <a href="pdo/tp_04/index.php" class="valign-wrapper">exercice <i class="material-icons">arrow_forward</i></a>
            </div>
        </div>
    </div>

    <div class="col s12 m6 l4">
        <div class="card medium teal darken-2">
            <div class="card-content white-text">
                <span class="card-title center-align">05 - BindValue()</span>
                <p>Utiliser les requêtes préparées.</p>
            </div>
            <div class="card-action">
                <a href="pdo/tp_05/index.php" class="valign-wrapper">exercice <i class="material-icons">arrow_forward</i></a>
            </div>
        </div>
    </div>

<?php
/**
 * Ne pa modifier
 * permet d'inclure le menu et le template
 */
$content = ob_get_clean();
require "../partials/layout.php";
?>