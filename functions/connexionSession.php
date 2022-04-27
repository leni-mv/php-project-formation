<?php

//créer un booléen pour voir si connection réussie ou pas
// Si à true > style visible
$connexionReussie = false;

function connexionSession() {

  global $connexionReussie;

  if(isset($_POST['nom'])){
    htmlentities($_POST['nom']);
    $_SESSION += $_POST;
  }
  
  if(isset($_POST['pass'])){
    htmlentities($_POST['pass']);
  }
  
  if (!empty($_SESSION)){
    $connexionReussie = true;
    $nom = $_SESSION['nom'];
    echo "<div class=\"container\"> <h1> Bonjour $nom ! </h1></div>";
  } else {
    echo "<div class=\"container\"> <h1> Bienvenue ! </h1></div>";
  }

}

function deconnexion() {

  global $connexionReussi;

  if(isset($_POST['deconnexion'])) {
    session_unset();
    $connexionReussi = false; 
  }
}

connexionSession();
deconnexion();
?>