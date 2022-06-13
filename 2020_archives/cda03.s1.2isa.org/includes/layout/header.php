<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="<?php echo $metadescription ?>">
    <meta name="keywords" content="<?php echo $keywords ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $title ?></title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900&display=swap"
          rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="./css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="./css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="./css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="./css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="./css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="./css/style.css" type="text/css">
    <link rel="stylesheet" href="./vendor/summernote-0.8.18-dist/summernote.min.css" type="text/css">
    <!-- Css OPEN STREET MAP -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.1/dist/leaflet.css" integrity="sha512-Rksm5RenBEKSKFjgI3a41vrjkw4EVPlJ3+OiI65vTjIdo9brlAacEuKOiQ5OFh7cOI1bkDwLqdLw3Zg0cRJAAQ==" crossorigin="" />

    <!-- Mon fichier Css Styles -->
    <link rel="stylesheet" href="./css/main.css?v=1.<?php echo time() ?>" type="text/css">
    <!-- TP a realiser - generer l'url canonique de toute vos pages -->
    <!-- voir https://support.google.com/webmasters/answer/139066?hl=fr -->
    <link rel="canonical" href="http://cda03.s1.2isa.test/page-contact" />

    <!-- Matomo -->
    <script type="text/javascript">
        var _paq = window._paq = window._paq || [];
        /* tracker methods like "setCustomDimension" should be called before "trackPageView" */
        _paq.push(['trackPageView']);
        _paq.push(['enableLinkTracking']);
        (function() {
            var u="//cda03.s1.2isa.org/matomo/";
            _paq.push(['setTrackerUrl', u+'matomo.php']);
            _paq.push(['setSiteId', '1']);
            var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
            g.type='text/javascript'; g.async=true; g.src=u+'matomo.js'; s.parentNode.insertBefore(g,s);
        })();
    </script>
    <!-- End Matomo Code -->

</head>

<body>
<!-- Page Preloder -->
<div id="preloder">
    <div class="loader"></div>
</div>

<!-- Modal HTML - Fentre d'information -->
<?php include('./includes/tmpl/modal.php'); ?>

<!-- Header Section Begin -->
<header class="header-section">
    <div class="container">
        <div class="logo">
            <a href="./index.html">
                <img src="img/logo.png" alt="">
            </a>
        </div>
        <div class="nav-menu">
            <nav class="mainmenu mobile-menu">
                <ul>
                    <!-- Réaliser TP fil rouge avec SELECT pour génerer le menu -->
                    <li class="<?php if($page == 'accueil'){echo 'active';} ?>"><a href="./index.php">Accueil</a></li>
                    <li class="<?php if($page == 'presentation'){echo 'active';} ?>"><a href="./index.php?page=presentation">Présentation</a></li>
                    <li class="<?php echo $page == 'activites' ? 'active' : ''; ?>"><a href="./index.php?page=activites">Activités</a></li>
                    <li class="<?php echo $page == 'informations' ? 'active' : ''; ?>"><a href="./page-informations">Informations</a></li>
                    <li class="<?php echo $page == 'galerie' ? 'active' : ''; ?>"><a href="./index.php?page=galerie">Galerie Photo</a></li>
                    <li class="<?php echo $page == 'contact' ? 'active' : ''; ?>"><a href="./index.php?page=contact">Contacts</a></li>
                    <?php if($user_level == 0){ ?>
                        <li class="<?php echo $page == 'connexion' ? 'active' : ''; ?>"><a href="./index.php?page=connexion">Connexion</a></li>
                    <?php } ?>

                </ul>
            </nav>

            <!-- Affichage menu connecté -->
            <?php if($user_level > 0){ ?>

                <div class="dropdown">
                    <button class="primary-btn signup-btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <?php echo $_SESSION['prenom'].' '.$_SESSION['nom'] ?>
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="./index.php?page=profil&id=<?php echo $_SESSION['id_adherent'] ?>" class="primary-btn signup-btn">Mon profil</a>
                        <a class="dropdown-item" href="./index.php?page=membres">Liste des membres</a>
                        <!-- //uniquement pour l'admin -->
                        <?php if($user_level == 2){ ?>
                        <a class="dropdown-item" href="./index.php?page=informations&action=add">Ajouter News</a>
                        <?php } ?>
                        <a class="dropdown-item" href="./index.php?deconnexion=1">Deconnexion <span class="fa fa-sign-out"></span></a>
                    </div>
                </div>



            <?php }else{ ?>
                <a href="./index.php?page=inscription" class="primary-btn signup-btn">Inscription</a>
            <?php } ?>
        </div>
        <div id="mobile-menu-wrap"></div>
    </div>
</header>
<!-- Include header.php -->
<!-- Header End -->
