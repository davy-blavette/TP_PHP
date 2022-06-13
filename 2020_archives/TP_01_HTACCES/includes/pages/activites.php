        <?php

        if(isset($_GET['detail']) AND !empty($_GET['detail'])){
            //afficher ma page detail de l'activite*

            //la requete
            $reponse = $bdd->prepare('SELECT * FROM activites WHERE ID_ACTIVITE = ?');
            //je me premunis des injections SQL
            $reponse->execute(array($_GET['detail']));

            if($reponse->rowCount()){
                //boucle les données récupérées
                while ($donnees = $reponse->fetch()) {
                    echo "<h1>".$donnees['TITRE']."</h1>";

                }


            }


?>



            <a href="page-activites" class="btn btn-primary">Retour à la liste de mes activités</a>

            <?php



        }else{

?>

    <h1>Ma Page d'activites</h1>

<div class="container">
    <div class="row" >

<?php
//la requete
$reponse = $bdd->query('SELECT * FROM activites');

//boucle les données récupérées
while ($donnees = $reponse->fetch()) {

    //affichage des données
    ?>

    <div class="col-md-6">
        <div class="row" >
            <div class="col-md-6">
                <img class="w-100" src="/img/activites/<?php echo $donnees['PHOTO'] ?>" />
            </div>
            <div class="col-md-6">
                <article>
                    <h2><?php echo $donnees['TITRE'] ?></h2>
                    <p><?php echo $donnees['INTRODUCTION'] ?></p>
                    <a href="/page-activites-<?php echo $donnees['ID_ACTIVITE'] ?>" class="btn btn-primary">
                        En savoir +
                    </a>

                </article>
            </div>
        </div>
    </div>

    <?php
    //fin de ma boucle while
}

?>



    </div>

</div>

<?php } ?>
