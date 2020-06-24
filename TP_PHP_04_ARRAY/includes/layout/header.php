<!DOCTYPE html>
<html class="no-js" lang="fr">
<head>
    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title><?php echo $title; ?> - Polysongs</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <link href="./css/main.css" rel="stylesheet" />

</head>
<body>

<nav>
    <ul>
        <li><a href="index.php" class="<?php echo $page == 'index' ? 'active' : ''; ?>">Accueil</a></li>
        <li><a href="index.php?page=activites" class="<?php echo $page == 'activites' ? 'active' : ''; ?>">Activite</a></li>
        <li><a href="index.php?page=contact" class="<?php echo $page == 'contact' ? 'active' : ''; ?>">Contact</a></li>
    </ul>
</nav>