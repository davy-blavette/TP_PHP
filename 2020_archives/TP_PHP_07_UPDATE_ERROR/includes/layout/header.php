<!DOCTYPE html>
<html class="no-js" lang="fr" prefix="og: http://ogp.me/ns#">
<head>
    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title><?php echo $title; ?></title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <meta property="og:title" content="<?php echo $title; ?>" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="<?php echo 'http://'.$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI']; ?>" />
    <meta property="og:image" content="<?php echo 'http://'.$_SERVER['SERVER_NAME'].$root; ?>/img/<?php echo $ogImg ?>" />

    <link href="./css/main.css<?php echo "?v=".time() ?>" rel="stylesheet" />


</head>
<body>

<nav>
    <ul>
        <li><a href="index.php" class="<?php echo $page == 'accueil' ? 'active' : ''; ?>">Accueil</a></li>
        <li><a href="index.php?page=activites" class="<?php echo $page == 'activites' ? 'active' : ''; ?>">Activite</a></li>
        <li><a href="index.php?page=membres" class="<?php echo $page == 'membres' ? 'active' : ''; ?>">Membres</a></li>
        <li><a href="index.php?page=contact" class="<?php echo $page == 'contact' ? 'active' : ''; ?>">Contact</a></li>
    </ul>
</nav>