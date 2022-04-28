<?php
// Ici on va envoyer au formulaire php les données à afficher (liste de départements)
/*
Enregistrer fichier Cyril dans BDD
  Connecter BDD à php
  Récupérer liste départements pour les afficher dans un select>options
  Quand utilisateur click sur un département renvoyer donnée à js
  */

  //mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
  $mysqli = new mysqli('localhost', 'root', '', 'tuto-php', 3306);
  //print_r($mysqli);
  $query = mysqli_prepare($mysqli, "SELECT (`id_region`) FROM region");
  
  //$result = mysqli_fetch_all($query);
  
  //mysqli_stmt_bind_param($query, 's', $id_region);
  //$region = mysqli_stmt_get_result($query);

  ?>
<pre>
<?php

  var_dump($query)
  ?>

</pre>
  <?php

  


// Ici on va reçevoir information AJAX et la traiter en mysql
/*
Récupérer donnée AJAX dans un $_SESSION
  Faire une requête sql pour récupérer la liste des villes
  Afficher liste villes dans un select>option
  */