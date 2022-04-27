<?php

use function PHPSTORM_META\type;

$jour = ["Lundi",
  "Mardi",
  "Mercredi",
  "Jeudi",
  "Vendredi",
  "Samedi",
  "Dimanche"];

$heure = [
  [[8,12], [14, 19]],
  [[8,12], [14, 19]],
  [[8,12], [14, 19]],
  [[8,12], [14, 19]],
  [[8,12], [14, 19]],
  [[10,12],],
  [['Fermé']]
];


function afficherHoraire($jour, $heure){
  for ($i = 0; $i < 7; $i++) {
    if($i === 5){
      echo $jour[$i] . " : " . $heure[$i][0][0] . "h-" . $heure[$i][0][1] . "h "; ?> <br> <?php
    } else if($i === 6) {
      echo $jour[$i] . " : Fermé";
    } else {
      echo $jour[$i] . " : " . $heure[$i][0][0] . "h-" . $heure[$i][0][1] . "h " . $heure[$i][1][0] . "h-" . $heure[$i][1][1] . "h"; ?> <br> <?php
    }
  }
}

//echo count($jour); // Retourne 7 de 0 à 7, je ne sais pas pourquoi

function afficherOuverture($jour, $heure) {

  for($i = 0; $i <= count($jour)-1; $i++) {
    $compteur = 0;
    if ($i == 5 && intval(date('N'))-1 == $i) { //si on est samedi
      if (intval(date('G')) >= $heure[$i][0][0] || intval(date('G')) <= $heure[$i][0][1]){
        echo "<div class=\"alert alert-success\" role=\"alert\">
          Le magasin est ouvert.
        </div>";
      }

    } else if ($i == 6 && intval(date('N'))-1 == $i) { //si on est dimanche
      echo "<div class=\"alert alert-danger\" role=\"alert\">
        Le magasin est fermé.
      </div>";

    } else if (intval(date('N'))-1 == $i && ((intval(date('G')) >= $heure[$i][0][0] && intval(date('G')) <= $heure[$i][0][1]) || (intval(date('G')) >= $heure[$i][1][0] && intval(date('G')) <= $heure[$i][1][1]))) {
      echo "<div class=\"alert alert-success\" role=\"alert\">
          Le magasin est ouvert.
        </div>";
     } else if (intval(date('N'))-1 == $i && ((intval(date('G')) <= $heure[$i][0][0] || intval(date('G')) >= $heure[$i][0][1]) || (intval(date('G')) <= $heure[$i][1][0] || intval(date('G')) >= $heure[$i][1][1]))) {

      echo "<div class=\"alert alert-danger\" role=\"alert\">
        Le magasin est fermé.
      </div>";
    }    
  }
}
echo "<div class=\"mb-3 w-50\">";
afficherOuverture($jour, $heure);
echo "</div>";

echo "<div class=\"mb-3 w-50\">";
afficherHoraire($jour, $heure);
echo "</div>";


?>