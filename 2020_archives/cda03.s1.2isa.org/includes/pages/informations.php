<main>


    <!-- Breadcrumb Section Begin -->
    <?php include('./includes/tmpl/head_breadcrumb.php') ?>
    <!-- Breadcrumb Section End -->

    <!-- Blog Section Begin -->
    <section class="blog-section spad">
        <div class="container">
            <div id="news_breadcrumb" class="row">

                <?php

                //la requete
                $reponse = $bdd->query('SELECT * FROM nouvelle');

                //boucle les données récupérées
                while ($donnees = $reponse->fetch()) {

                    //le template html d'une mini news
                    include('./includes/tmpl/news_breadcrumb.php');
                }

                ?>

            </div>
        </div>
    </section>
    <!-- Blog Section End -->
    <?php
    if($user_level == 2 && $wysiwyg == true){
        include('./includes/tmpl/wysiwyg.php');
    }
    ?>


</main>