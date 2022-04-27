<?php

// Lier fonction à page menu
// Lier fonction à fichier csv ou tsv
// afficher menu, faire tes petits tests pour que ce soit jolie owo

// FOPEN READ FCLOSE
$fichier = fopen('../data/menu.csv', 'r');





while ($line = fgets($fichier)) {

  ?> <div class="row p-3"> <?php

  if (str_word_count($line) <= 2){ // Si c'est un titre, le chiffre 2 car déssert est compté pour deux o_o mé!
    echo "<h3>" . trim($line, " \n\r\t\v\x00,") . "</h3> <br>";

  } else if (str_word_count($line) >= 2) { // Si c'est un plat
    
    $word = str_getcsv($line); //plus pratique que emplode pour cet exo

    ?> <div class="col-sm-8"> <?php
    echo "<strong>" . $word[0] . "</strong> <br>";
    echo $word[1] . "<br>";
    echo "</div>";

    ?> <div class="col-sm-4"> <?php
    echo "<strong>" . $word[2] . "€</strong>";
    echo "</div>";

  }

  echo "</div>";

}

fclose($fichier);


// $lignes = file('../data/menu.tsv');

// foreach ($lignes as $index => $ligne) {
//   $lignes[$index] = explode('\t', trim($ligne));
// }

// foreach($lignes as $ligne) {
//   if (count($ligne) === 1) {
//     echo "<h3>" . $ligne[0] . "</h3>";
//   } else {
//     echo "<strong>" . $ligne[0] . "</strong> <br>";
//     echo $ligne[1] . "<br>";
//     echo "<strong>" . $ligne[2] . "euros</strong> <br><br>";
//   }
// }



?>