<?php session_start(); ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Music Store</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  </head>
  <body>


<div>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="./">Home</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="./article.php">Music Store</a>
      </li>
      <!-- <li class="nav-item">
        <a class="nav-link" href="./create.php">Creation</a>
      </li> -->
      <li class="nav-item">
      <?php   if (!empty($_SESSION['nom'])) { ?>
        <a class="nav-link" href="./deco.php">Déconnexion</a>
      <?php  } else { ?>
        <a class="nav-link" href="./login.php">Connexion</a>
      <?php } ?>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Panier</a>
      </li>
    </ul>
  </div>
</nav>
</div>

<div>
  <div class="alert alert-success" role="alert">
    <?php   if (!empty($_SESSION['nom'])) {
        echo "Bienvenue sur votre site " . $_SESSION['nom'];
      } else {
        echo "Pas encore de compte ? inscription 100% gratuite";
      } ?>
</div>
</div>
