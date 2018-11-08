<?php include "inc/header.php" ?>

<!-- Formulaire de connexion -->

<h1 style="text-align: center">Inscription</h1>
<div class="container form">
  <form action="./co.php" method="post">
    <div>
      <label> <b>Votre Nom</b></label>
      <input type="text" name="nom" placeholder="Entrez votre nom"  required>

      <label> <b>Votre MDP</b></label>
      <input type="password" placeholder="Entrez votre MDP"  required>

      <button type="submit">Inscription</button>
    </div>
  </form>
</div>
