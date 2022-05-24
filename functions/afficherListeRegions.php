<?php
// Envoyer au formulaire php les données à afficher (liste de regions) en PDO
// 'localhost', 'root', '', 'tuto-php');

// PDO connexion bdd
// Afficher résultats

function afficherListeRegions() {

  try {
    $bdd = new PDO('mysql:host=localhost; dbname=tuto-php', 'root', '');
    foreach($bdd->query('SELECT * FROM region ORDER BY nom_region') as $row){
      // print_r($row);
      echo '<option value="'. $row['id_region'] .'">'. $row['nom_region'] .'</option>';
    }

    $bdd = null;
  } catch(PDOException $e) {
    print 'Erreur : ' . $e->getMessage() . '<br>';
    die();
  }
  
}
