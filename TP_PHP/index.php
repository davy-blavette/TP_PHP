<!DOCTYPE html>
<html lang="fr">
<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Début Bootstrap</title>
    <!-- Bootstrap CSS -->
    <!--
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous"/>
    -->
    <link rel="stylesheet" href="./vendor/bootstrap-4.5.0-dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="./vendor/slick-1.9.0/slick.css">
    <link rel="stylesheet" href="./vendor/slick-1.9.0/slick-theme.css">
    <link rel="stylesheet" href="./vendor/summernote-0.8.18/summernote.min.css">

    <link rel="stylesheet" href="./css/main.css?v=1.<?php echo time() ?>" />

</head>
<body>
    <header class="">
        <nav class="navbar navbar-expand-lg navbar-light bg-secondary">
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li class="nav-item active mynav">
                        <a class="nav-link" href="#">Accueil <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Mon CV</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Fil Rouge</a>
                    </li>
                </ul>
            </div>
            <button class="btn">Template</button>
        </nav>
    </header>
    <main class="main mt-2 mb-2">

        <section id="slider" class="container">
            <div class="row bg-primary">
                <div class="col-12">
                    <div class="slider">

                        <div class="row">
                            <div class="col-12">
                                <ul class="list-unstyled mt-2 mb-2">
                                    <li class="media">
                                        <img class="mr-3" src="./img/arbre.jpg" alt="Generic placeholder image">
                                        <div class="media-body p-2">
                                            <h5 class="mt-0 mb-1"><?php echo 'Mon titre Slide'; ?></h5>
                                            Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                                        </div>
                                    </li>
                                </ul>
                            </div>

                        </div>
                        <div>slide 2</div>
                        <div>slide 3</div>
                    </div>
                </div>
            </div>


        </section>

        <section id="about">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-6 col-md-4 col-lg-4">

                        <ul class="list-unstyled mt-2 mb-2">
                            <li class="media">
                                <img class="mr-3" src="./img/arbre.jpg" alt="Generic placeholder image">
                                <div class="media-body p-2">
                                    <h5 class="mt-0 mb-1">List-based media object</h5>
                                    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                                </div>
                            </li>
                            <li class="media my-4">
                                <img class="mr-3" src="./img/arbre.jpg" alt="Generic placeholder image">
                                <div class="media-body p-2">
                                    <h5 class="mt-0 mb-1">List-based media object</h5>
                                    <p class="intro">
                                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin.
                                    </p>
                                    <p class="desc">
                                        Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.
                                    </p>
                                    <button class="btn btn-primary morecss">En savoir plus</button>
                                </div>
                            </li>
                            <li class="media">
                                <img class="mr-3" src="./img/arbre.jpg" alt="Generic placeholder image">
                                <div class="media-body p-2">
                                    <h5 class="mt-0 mb-1">List-based media object</h5>
                                    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                                </div>
                            </li>
                        </ul>

                    </div>
                    <div id="articles" class="col-12 col-sm-6 col-md-4 col-lg-4">

                        <?php
                        //for
                        for($nb_article = 1; $nb_article < 10 ; $nb_article++){ ?>

                                <article class="art<?php echo $nb_article; ?>">

                                <h2>Article <?php echo $nb_article; ?></h2>
                                <p class="intro">
                                    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin.
                                </p>
                                <p class="desc">
                                    Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.
                                </p>
                                <button class="btn btn-primary more">En savoir plus</button>
                            </article>

                        <?php } ?>

                        <?php
                        //while ou do while

                        while ($nb_article < 20){

                            $nb_article++;

                            ?>
                            <article class="art<?php echo $nb_article; ?>">
                                <h2>Article <?php echo $nb_article . ' - Il fait beau today !'; ?></h2>
                                <p class="intro">
                                    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin.
                                </p>
                                <p class="desc">
                                    Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.
                                </p>
                                <button class="btn btn-primary more">En savoir plus</button>
                            </article>

                            <?php }  //foreach ?>


                        <?php

                        $tb_article = array('article 1','article 2','article 3','article 4');

                        foreach ($tb_article as $title_article){
                        ?>

                            <article class="art<?php echo $nb_article; ?>">
                                <h2><?php echo $title_article; ?></h2>
                                <p class="intro">
                                    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin.
                                </p>
                                <p class="desc">
                                    Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.
                                </p>
                                <button class="btn btn-primary more">En savoir plus</button>
                            </article>

                        <?php } ?>

                       <?php

                       $tb_article_2 = array(
                               0 => 'Article 22',
                           'lefigaro' => 'Article 23',
                           'lemonde' => 'Article 24',
                            array(
                                   'liberation' => 'Article 25'
                           )
                       );
                       // Equivalent JSON
                        /*
                       {
                           0:'Article22,
                           'lefigaro' : 'Article 23',
                           'lemonde' : 'Article 24',
                            {
                                'liberation' : 'Article 24'
                            }


                       }
                       */



                       ?>

                        <article class="art<?php echo $nb_article; ?>">
                            <h2><?php echo $tb_article_2[1]['liberation']; ?></h2>
                            <p class="intro">
                                Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin.
                            </p>
                            <p class="desc">
                                Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.
                            </p>
                            <button class="btn btn-primary more">En savoir plus</button>
                        </article>
                    </div>
                    <div class="col-12 col-md-4 col-lg-4">
                        <div class="wysiwyg">
                            <textarea id="summernote"></textarea>
                            <button id="wysiwyg" class="btn btn-primary">Ajouter</button>
                        </div>

                        <?php

                        $tb_member = array(
                                25 => array(
                                    'prenom' => 'Vincent',
                                    'nom' => 'Martin',
                                    'age' => '35 ans',
                                    'marque' => 'honda',
                                    'puissance' => '125 m3',
                                    'cotisation' => 1
                                ),

                                28 => array(
                                    'prenom' => 'Paul',
                                    'nom' => 'Dupont',
                                    'age' => '42 ans',
                                    'marque' => 'Yamaha',
                                    'puissance' => '550 m3',
                                    'cotisation' => 0
                                )
                        );

                        ?>

                        <section id="member">
                            <h2>Nos Membres</h2>
                            <hr>

                            <?php
                            //exemple 1 Foreach avec clef valeur
                            foreach ($tb_member as $key => $value){ ?>

                                <div id="<?php echo $key ?>">
                                    <div class="prenom"><?php echo $value['prenom'] ?></div>
                                    <div class="nom"><?php echo $value['nom'] ?></div>
                                    <div class="age"><?php echo $value['age'] ?></div>
                                    <div class="marque"><?php echo $value['marque'] ?></div>
                                    <div class="puissance"><?php echo $value['puissance'] ?></div>
                                    <div class="cotisation"><?php echo $value['cotisation'] ?></div>
                                </div>
                                <hr>

                            <?php } ?>
                            <h2>Nos Membres TB 2</h2>
                            <?php

                            //exemple 2 même tableau en simplifiant le code
                            foreach ($tb_member as $id_member => $members){
                            echo '<div id="'. $key .'">';
                                foreach ($members as $libelle => $value){

                                    $class = '';

                                    if($libelle == 'cotisation'){
                                        if($value == 1){
                                            $class = 'green';
                                        }else{
                                            $class = 'red';
                                        }
                                    }

                                    echo '<div class="'.$libelle. ' ' . $class.'">' . $value .'</div>';

                                 }
                            echo '</div><hr>';

                         } ?>



                        </section>

                    </div>
                </div>

            </div>
        </section>


    </main>
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    Pied de page
                </div>
            </div>
        </div>
    </footer>

    <script src="./js/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"
            integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="./vendor/bootstrap-4.5.0-dist/js/bootstrap.min.js"></script>
    <script src="./vendor/slick-1.9.0/slick.js"></script>
    <script src="./vendor/summernote-0.8.18/summernote.min.js"></script>

    <script src="./js/main.js?v=1.<?php echo time() ?>"></script>

</body>
</html>