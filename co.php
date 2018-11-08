<?php
// Sert a effectuer la connexion après le formulaire "login.php"
session_start();

echo "Bonjour,  " . $_POST['nom'];
echo "<br>";

//$_SESSION['nom'] = $_POST['nom'];
if ($_SESSION['nom'] = $_POST['nom']) {
  header("Location: ./");
} else {
  echo "Erreuuuuuurrrrrrrr";
}

 ?>
