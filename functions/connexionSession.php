<?php

//créer un booléen pour voir si connection réussie ou pas
// Si à true > style visible
$connexionReussie = false;
$pseudo = 'Poppy';
$pass = 'hhh';
$error = false;

function connexionSession() {

  global $connexionReussie, $pseudo, $pass, $error;

  if(htmlentities(isset($_POST['nom'])) && htmlentities(isset($_POST['pass'])) ){
    if ($_POST['nom'] == $pseudo && $_POST['pass'] == $pass) {
      $error = false;
      $_SESSION += $_POST;
    } else {
      $error = true;
    }
  }
  
  // if(isset($_POST['pass'])){
  //   htmlentities($_POST['pass']);
  // }
  
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
deconnexion();
connexionSession();
?>