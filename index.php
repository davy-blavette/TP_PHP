<?php ob_start(); //  ne pas modifier
$titre = "Exercices PHP"; // Mettre le titre de la page
?>

<!-- mettre le code ici -->
<!-- Les bases -->
<div class="row">
    <h2 class="center-align">Les bases</h2>
<p>Afin de réaliser les exercices, vous avez à votre disposition une architecture de fichiers. Cette base de travail est téléchargeable sur Amio-Fit. Nous réaliserons la mise en place avec Laragon lors d’une séance. Dans la mesure du possible, il vous est demandé de respecter l’exemple de sortie donné en exemple.</p>
    <!-- Exo 1 -->
    <div class="col s12 m6 l4">
        <div class="card medium teal darken-2">
            <div class="card-content white-text">
                <span class="card-title center-align">Exo01 - Variables</span>
                <p>Cet exercice consiste à interchanger les valeurs de différentes variables</p>
            </div>
            <div class="card-action">
                <a href="exercices/exo01/index.php" class="valign-wrapper">exercice <i class="material-icons">arrow_forward</i></a>
            </div>
        </div>
    </div>

    <!-- Exo 2 -->
    <div class="col s12 m6 l4">
        <div class="card medium teal darken-2">
            <div class="card-content white-text">
                <span class="card-title center-align">Exo02 - Variables et concaténation</span>
                <p>Vous devrez réaliser des affichages en utilisant différents types de concaténation</p>
            </div>
            <div class="card-action">
                <a href="exercices/exo02/index.php" class="valign-wrapper">exercice <i class="material-icons">arrow_forward</i></a>
            </div>
        </div>
    </div>

    <!-- Exo 3 -->
    <div class="col s12 m6 l4">
        <div class="card medium teal darken-2">
            <div class="card-content white-text">
                <span class="card-title center-align">Exo03 - Les tests (1)</span>
                <p>Écrire une expression conditionnelle utilisant les variables $age et $sexe dans une instruction if pour sélectionner une personne de sexe féminin dont l’age est compris entre 21 et 40 ans et afficher un message de bienvenue approprié.</p>
            </div>
            <div class="card-action">
                <a href="exercices/exo03/index.php" class="valign-wrapper">exercice <i class="material-icons">arrow_forward</i></a>
            </div>
        </div>
    </div>

    <!-- Exo 4 -->
    <div class="col s12 m6 l4">
        <div class="card medium teal darken-2">
            <div class="card-content white-text">
                <span class="card-title center-align">Exo04 - Les tests (2)</span>
                <p>Le programme choisi un nombre aléatoire entre 1 et 20. En fonction de ce nombre il faudra construire une structure conditionnelle.</p>
            </div>
            <div class="card-action">
                <a href="exercices/exo04/index.php" class="valign-wrapper">exercice <i class="material-icons">arrow_forward</i></a>
            </div>
        </div>
    </div>

    <!-- Exo 5 -->
    <div class="col s12 m6 l4">
        <div class="card medium teal darken-2">
            <div class="card-content white-text">
                <span class="card-title center-align">Exo05 - Les tests (3)</span>
                <p>Le programme choisi deux nombres aléatoires entre 1 et 100. Calcule la valeur absolue du premier moins le second et détermine si le résultat est compris entre 25 et 75.</p>
            </div>
            <div class="card-action">
                <a href="exercices/exo05/index.php" class="valign-wrapper">exercice <i class="material-icons">arrow_forward</i></a>
            </div>
        </div>
    </div>

    <!-- Exo 6 -->
    <div class="col s12 m6 l4">
        <div class="card medium teal darken-2">
            <div class="card-content white-text">
                <span class="card-title center-align">Exo06 - Les ternaires</span>
                <p>Reprendre l'exo2 mais en utilisant les ternaires</p>
            </div>
            <div class="card-action">
                <a href="exercices/exo06/index.php" class="valign-wrapper">exercice <i class="material-icons">arrow_forward</i></a>
            </div>
        </div>
    </div>

    <!-- Exo 7 -->
    <div class="col s12 m6 l4">
        <div class="card medium teal darken-2">
            <div class="card-content white-text">
                <span class="card-title center-align">Exo07 - La boucle for</span>
                <p>Le programme choisi un nombre aléatoire entre 5 et 15 puis affiche la table de multiplication de ce nombre.</p>
            </div>
            <div class="card-action">
                <a href="exercices/exo07/index.php" class="valign-wrapper">exercice <i class="material-icons">arrow_forward</i></a>
            </div>
        </div>
    </div>

    <!-- Exo 8 -->
    <div class="col s12 m6 l4">
        <div class="card medium teal darken-2">
            <div class="card-content white-text">
                <span class="card-title center-align">Exo08 - La boucle for</span>
                <p>Le programme choisi un nombre aléatoire entre 5 et 15 puis affiche le cumul des nombres en sens inverse.</p>
            </div>
            <div class="card-action">
                <a href="exercices/exo08/index.php" class="valign-wrapper">exercice <i class="material-icons">arrow_forward</i></a>
            </div>
        </div>
    </div>

    <!-- Exo 9 -->
    <div class="col s12 m6 l4">
        <div class="card medium teal darken-2">
            <div class="card-content white-text">
                <span class="card-title center-align">Exo09 - La boucle while</span>
                <p>Le programme choisi un nombre aléatoire entre 1 et 20 tant que le nombre choisi n'est pas supérieur à 15. Afficher les essais.</p>
            </div>
            <div class="card-action">
                <a href="exercices/exo09/index.php" class="valign-wrapper">exercice <i class="material-icons">arrow_forward</i></a>
            </div>
        </div>
    </div>

    <!-- Exo 10 -->
    <div class="col s12 m6 l4">
        <div class="card medium teal darken-2">
            <div class="card-content white-text">
                <span class="card-title center-align">Exo10 - La boucle do while</span>
                <p>Le programme choisi trois nombres aléatoires entre 1 et 1000 jusqu'à obtenir une suite composée d'un nombre pair suivi de deux nombres impairs.</p>
            </div>
            <div class="card-action">
                <a href="exercices/exo10/index.php" class="valign-wrapper">exercice <i class="material-icons">arrow_forward</i></a>
            </div>
        </div>
    </div>

    <!-- Exo 11 -->
    <div class="col s12 m6 l4">
        <div class="card medium teal darken-2">
            <div class="card-content white-text">
                <span class="card-title center-align">Exo11 - Les boucles for et while</span>
                <p>Choisir un nombre de trois chiffres (en dur dans une variable). Effectuer ensuite des tirages aléatoires et compter le nombre de tirages nécessaire pour obtenir le nombre initial. Arrêter les tirages et afficher le nombre de coups réalisés. Réaliser ce script d’abord avec l’instruction while puis avec l’instruction for.</p>
            </div>
            <div class="card-action">
                <a href="exercices/exo11/index.php" class="valign-wrapper">exercice <i class="material-icons">arrow_forward</i></a>
            </div>
        </div>
    </div>

    <!-- Exo 12 -->
    <div class="col s12 m6 l4">
        <div class="card medium teal darken-2">
            <div class="card-content white-text">
                <span class="card-title center-align">Exo12 - Les fonctions</span>
                <p>Ecrire une fonction qui va vérifier si un nombre est pair ou non. Le programme se chargera d’afficher un message en fonction du résultat retourné par la fonction. La fonction ne doit pas réaliser l'affichage.</p>
            </div>
            <div class="card-action">
                <a href="exercices/exo12/index.php" class="valign-wrapper">exercice <i class="material-icons">arrow_forward</i></a>
            </div>
        </div>
    </div>

    <!-- Exo 13 -->
    <div class="col s12 m6 l4">
        <div class="card medium teal darken-2">
            <div class="card-content white-text">
                <span class="card-title center-align">Exo13 - Les fonctions</span>
                <p>Vous écrirez une fonction qui retourne la factorielle d’un nombre. La factorielle de n est la multiplication de tous les entiers <= n (ex : 5 !=1x2x3x4x5).<br>Notez que 0! et 1! = 1.<br>La fonction ne doit pas réaliser l'affichage.</p>
            </div>
            <div class="card-action">
                <a href="exercices/exo13/index.php" class="valign-wrapper">exercice <i class="material-icons">arrow_forward</i></a>
            </div>
        </div>
    </div>

    <!-- Exo 14 -->
    <div class="col s12 m6 l4">
        <div class="card medium teal darken-2">
            <div class="card-content white-text">
                <span class="card-title center-align">Exo14 - Les fonctions</span>
                <p>Ecrire une fonction qui retourne le PGCD de deux nombres entiers positifs.</p>
            </div>
            <div class="card-action">
                <a href="exercices/exo14/index.php" class="valign-wrapper">exercice <i class="material-icons">arrow_forward</i></a>
            </div>
        </div>
    </div>

    <!-- Exo 15 -->
    <div class="col s12 m6 l4">
        <div class="card medium teal darken-2">
            <div class="card-content white-text">
                <span class="card-title center-align">Exo15 - Les tableaux</span>
                <p>Ecrire une fonction supprime les voyelles d'un mot.</p>
            </div>
            <div class="card-action">
                <a href="exercices/exo15/index.php" class="valign-wrapper">exercice <i class="material-icons">arrow_forward</i></a>
            </div>
        </div>
    </div>

    <!-- Exo 16 -->
    <div class="col s12 m6 l4">
        <div class="card medium teal darken-2">
            <div class="card-content white-text">
                <span class="card-title center-align">Exo16 - Les tableaux</span>
                <p>Vous allez créer deux tableaux contenant respectivement des prénoms masculins et des prénoms féminins.<br>Vous afficherez ensuite le contenu des deux tableaux.</p>
            </div>
            <div class="card-action">
                <a href="exercices/exo16/index.php" class="valign-wrapper">exercice <i class="material-icons">arrow_forward</i></a>
            </div>
        </div>
    </div>

    <!-- Exo 17 -->
    <div class="col s12 m6 l4">
        <div class="card medium teal darken-2">
            <div class="card-content white-text">
                <span class="card-title center-align">Exo17 - Les tableaux</span>
                <p>Vous allez créer deux tableaux contenant des notes puis vous afficherez la moyenne des notes de chaque tableau.<br>Vous afficherez ensuite le contenu des deux tableaux.</p>
            </div>
            <div class="card-action">
                <a href="exercices/exo17/index.php" class="valign-wrapper">exercice <i class="material-icons">arrow_forward</i></a>
            </div>
        </div>
    </div>

    <!-- Exo 18 -->
    <div class="col s12 m6 l4">
        <div class="card medium teal darken-2">
            <div class="card-content white-text">
                <span class="card-title center-align">Exo18 - Les tableaux</span>
                <p>Vous allez créer un tableau contenant des tableaux de notes. Vous afficherez ensuite la moyenne des notes de chaque tableau.</p>
            </div>
            <div class="card-action">
                <a href="exercices/exo18/index.php" class="valign-wrapper">exercice <i class="material-icons">arrow_forward</i></a>
            </div>
        </div>
    </div>

    <!-- Exo 19 -->
    <div class="col s12 m6 l4">
        <div class="card medium teal darken-2">
            <div class="card-content white-text">
                <span class="card-title center-align">Exo19 - Les tableaux</span>
                <p>Vous allez créer un tableau associatif contenant deux personnes. Pour chaque personne vous aurez un nom, un âge et un sexe.<br>Vous afficher ensuite grâce à une fonction le contenu des tableaux.</p>
            </div>
            <div class="card-action">
                <a href="exercices/exo19/index.php" class="valign-wrapper">exercice <i class="material-icons">arrow_forward</i></a>
            </div>
        </div>
    </div>

    <!-- Exo 20 -->
    <div class="col s12 m6 l4">
        <div class="card medium teal darken-2">
            <div class="card-content white-text">
                <span class="card-title center-align">Exo20 - Les tableaux et les fonctions</span>
                <p>Vous allez utiliser des tableaux de tableaux et des fonctions.</p>
            </div>
            <div class="card-action">
                <a href="exercices/exo20/index.php" class="valign-wrapper">exercice <i class="material-icons">arrow_forward</i></a>
            </div>
        </div>
    </div>

    <!-- Exo 21 -->
    <div class="col s12 m6 l4">
        <div class="card medium teal darken-2">
            <div class="card-content white-text">
                <span class="card-title center-align">Exo21 - Formulaire et méthode GET</span>
                <p>Réalisez un formulaire HTML avec deux champs (pseudo et âge) puis affichez sur la même page le résultat saisi.</p>
            </div>
            <div class="card-action">
                <a href="exercices/exo21/index.php" class="valign-wrapper">exercice <i class="material-icons">arrow_forward</i></a>
            </div>
        </div>
    </div>

    <!-- Exo 22 -->
    <div class="col s12 m6 l4">
        <div class="card medium teal darken-2">
            <div class="card-content white-text">
                <span class="card-title center-align">Exo22 - Formulaire et méthode POST</span>
                <p>Réalisez un formulaire HTML avec un champ nombre puis affichez sur la même page si le nombre saisi est pair ou pas.</p>
            </div>
            <div class="card-action">
                <a href="exercices/exo22/index.php" class="valign-wrapper">exercice <i class="material-icons">arrow_forward</i></a>
            </div>
        </div>
    </div>

    <!-- Exo 23 -->
    <div class="col s12 m6 l4">
        <div class="card medium teal darken-2">
            <div class="card-content white-text">
                <span class="card-title center-align">Exo23 - Formulaire et tableau</span>
                <p>Vous réaliserez un formulaire (méthode POST) permettant de saisir 3 notes. Le programme principal récupérera les trois notes et les placera dans un tableau. Il calculera et affichera ensuite la moyenne de ces notes .</p>
            </div>
            <div class="card-action">
                <a href="exercices/exo23/index.php" class="valign-wrapper">exercice <i class="material-icons">arrow_forward</i></a>
            </div>
        </div>
    </div>

</div>

<!-- Bonus -->
<div class="row">
    <h2 class="center-align">Bonus</h2>
    <div class="divider"></div>

    <!-- Exo 24 -->
    <div class="col s12 m6 l4">
        <div class="card medium teal darken-2">
            <div class="card-content white-text">
                <span class="card-title center-align">Exo24 - Tableau à 2 dimensions</span>
                <p>Afficher l’ensemble des tables de multiplications (de 1 à 10) en utilisant un tableau à deux dimensions.</p>
            </div>
            <div class="card-action">
                <a href="exercices/exo24/index.php" class="valign-wrapper">exercice <i class="material-icons">arrow_forward</i></a>
            </div>
        </div>
    </div>

    <!-- Exo 25 -->
    <div class="col s12 m6 l4">
        <div class="card medium teal darken-2">
            <div class="card-content white-text">
                <span class="card-title center-align">Exo25 - Fonctions dans un fichier externe</span>
                <p>Dans un fichier externe, vous écrirez des fonctions permettant de travailler sur des tableaux.</p>
            </div>
            <div class="card-action">
                <a href="exercices/exo25/index.php" class="valign-wrapper">exercice <i class="material-icons">arrow_forward</i></a>
            </div>
        </div>
    </div>

    <!-- Exo 26 -->
    <div class="col s12 m6 l4">
        <div class="card medium teal darken-2">
            <div class="card-content white-text">
                <span class="card-title center-align">Exo26 - Tableaux associatifs</span>
                <p>Conditions sur tableaux associatifs.</p>
            </div>
            <div class="card-action">
                <a href="exercices/exo26/index.php" class="valign-wrapper">exercice <i class="material-icons">arrow_forward</i></a>
            </div>
        </div>
    </div>

</div>

<!-- POO -->
<div class="row">
    <h2 class="center-align">POO</h2>
    <div class="divider"></div>

    <!-- Exo 27 -->
    <div class="col s12 m6 l4">
        <div class="card medium teal darken-2">
            <div class="card-content white-text">
                <span class="card-title center-align">Exo27 - Les objets</span>
                <p>A partir de l’exercice précédent (exo26) modifier la structure pour utiliser des objets.<br>Créer une classe avec des attributs en public.<br>Réaliser les affichages demandés.</p>
            </div>
            <div class="card-action">
                <a href="exercices/exo27/index.php" class="valign-wrapper">exercice <i class="material-icons">arrow_forward</i></a>
            </div>
        </div>
    </div>

    <!-- Exo 28 -->
    <div class="col s12 m6 l4">
        <div class="card medium teal darken-2">
            <div class="card-content white-text">
                <span class="card-title center-align">Exo28 - Private et Getters</span>
                <p>Créer une classe permettant de gérer des voitures.<br>Chaque voiture comporte un modèle, une marque, une couleur et une année.<br>Les attributs doivent être private.<br>Permettre à l’utilisateur de filtrer les voitures par marque et par année.<br>Vous utiliserez la méthode POST.</p>
            </div>
            <div class="card-action">
                <a href="exercices/exo28/index.php" class="valign-wrapper">exercice <i class="material-icons">arrow_forward</i></a>
            </div>
        </div>
    </div>

    <!-- Exo 29 -->
    <div class="col s12 m6 l4">
        <div class="card medium teal darken-2">
            <div class="card-content white-text">
                <span class="card-title center-align">Exo29 - Attribut statique</span>
                <p>Créer une classe permettant de gérer des maisons. La classe sera dans un fichier séparé du fichier index.php.</p>
            </div>
            <div class="card-action">
                <a href="exercices/exo29/index.php" class="valign-wrapper">exercice <i class="material-icons">arrow_forward</i></a>
            </div>
        </div>
    </div>

    <!-- Exo 30 -->
    <div class="col s12 m6 l4">
        <div class="card medium teal darken-2">
            <div class="card-content white-text">
                <span class="card-title center-align">Exo30 - Manipuler 2 classes</span>
                <p>Créer 2 classes (Arme et Joueur) dans des fichiers séparés.<br>Nous allons manipuler les 2 classes.</p>
            </div>
            <div class="card-action">
                <a href="exercices/exo30/index.php" class="valign-wrapper">exercice <i class="material-icons">arrow_forward</i></a>
            </div>
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