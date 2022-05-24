<?php

if (isset($_POST['region'])){
  $region = (array) $_POST['region'];
  print_r($region);


try {
  $bdd = new PDO('mysql:host=localhost; dbname=tuto-php', 'root', '');

  $stmt = $bdd->prepare('SELECT * FROM departement WHERE id_region = ?');
  $stmt->execute($region);
  
} catch(PDOException $e) {
  print 'Erreur : ' . $e->getMessage() . '<br>';
  die();
}
 
function afficherListeDep() {
  global $stmt, $bdd;

  foreach($stmt as $row){
    echo '<option value="'. $row['id_departement'] .'">'. $row['nom_departement'] .'</option>';
  }

  $bdd = null;
  $stmt = null;

}
  
}