<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- on charge d'abord bootstrap, puis notre css à nous -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="js/button.js">

    <title>M-WEB</title>
</head>
<body>
    <div class="container">
<header class="navbar navbar-dark bg-primary">
    <div class="d-flex align-items-baseline mb-3 justify-content-between">
        <h1 class="mr-3"><a href="index.php"><p class="text-white">Portfolio</p></a></h1>
        <nav class="d-flex  align-items-baseline">
            <a href="index.php" class="nav-link" ><p class="text-white">Accueil</p></a>
            <a href="index.php?page=cv" class="nav-link"><p class="text-white">CV</p></a>
            <a href="index.php?page=recommandation" class="nav-link"><p class="text-white">Recommandation proffesionel</p></a>
            <a href="index.php?page=creation-article" class="nav-link"><p class="text-white">Posez une question</p></a>
            <a href="index.php?page=contact" class="nav-link"><p class="text-white">Contact</p></a>
        </nav>
    </div>

    <nav class="d-flex align-items-baseline">
        <?php
        //si l'utilisateur n'est pas connecté... 
        if (empty($_SESSION['user'])){
        ?>
        <a href="index.php?page=inscription" class="nav-link"><p class="text-white">Inscription</p></a>
        <a href="index.php?page=connexion" class="nav-link"><p class="text-white">Connexion</p></a>
        <?php 
        } else { 
        //sinon, s'il est connecté
        ?>
        <a href="index.php?page=deconnexion" class="nav-link"><p class="text-white">Déconnexion</p></a>
        <div><p class="text-white"><?= $_SESSION['user']['username'] ?></p></div>
        <?php } ?>
    </nav>
</header>
        <main>