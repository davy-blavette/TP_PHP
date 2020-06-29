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

    <!-- Mon fichier Css Styles -->
    <link rel="stylesheet" href="./css/main.css?v=1.<?php echo time() ?>" type="text/css">

</head>

<body>
<!-- Page Preloder -->
<div id="preloder">
    <div class="loader"></div>
</div>

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
                    <li class="<?php echo $page == 'informations' ? 'active' : ''; ?>"><a href="./index.php?page=informations">Informations</a></li>
                    <li class="<?php echo $page == 'galerie' ? 'active' : ''; ?>"><a href="./index.php?page=galerie">Galerie Photo</a></li>
                    <li class="<?php echo $page == 'contact' ? 'active' : ''; ?>"><a href="./index.php?page=contact">Contacts</a></li>
                </ul>
            </nav>
            <a href="./index.php?page=inscription" class="primary-btn signup-btn">Inscription</a>
        </div>
        <div id="mobile-menu-wrap"></div>
    </div>
</header>
<!-- Include header.php -->
<!-- Header End -->
