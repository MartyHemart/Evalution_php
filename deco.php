<?php
session_start();

function deco(){
  if (isset($_SESSION["nom"]))
    session_destroy();
    echo "Vous êtes déco du site dommage <br>";
    header ('location: ./index.php');
    exit;
}

echo deco();
