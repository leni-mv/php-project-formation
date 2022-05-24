<?php

if (isset($_POST['departement'])){
  $dep = (array) $_POST['departement'];
  var_dump($dep);


try {
  $bdd = new PDO('mysql:host=localhost; dbname=tuto-php', 'root', '');

  $stmt = $bdd->prepare('SELECT * FROM ville WHERE id_departement = ?');
  $stmt->execute([$_POST['departement']]);

  function afficherListeVille() {
    global $stmt;
  
    foreach($stmt as $row){
      echo '<option value="'. $row['id_ville'] .'">'. $row['nom_ville'] .'</option>';
    }
  
  }
  
} catch(PDOException $e) {
  print 'Erreur : ' . $e->getMessage() . '<br>';
  die();
}

}