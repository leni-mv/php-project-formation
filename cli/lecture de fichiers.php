<?php

//permet d'écrire dans un fichier, le créer automatiquement si il n'existe pas
// 3 param : chemin du fichier, contenu à insérer, spécification quand à la manière d'ajouter le contenu
// Note : ici le fichier demo.txt se créer à la racine
# file_put_contents('demo.txt', 'Salut ');

// Créer le fichier dans le dossier courant et y ajouter des données
# print __DIR__; // var_dump fonctionne pas avec mon terminal
# print dirname(__DIR__); //Remonte d'un dossier
# print dirname(__DIR__, 4); // Remonter d'autant de dossiers qu'on veut


$fichier = __DIR__ . DIRECTORY_SEPARATOR . 'demo.txt';
# file_put_contents($fichier, '! Comment va ?', FILE_APPEND);

// Si jamais le fichier n'a pas les permissions d'exécutions : rendre les erreurs silencieuses
# @file_put_contents($fichier, '! Comment va ?', FILE_APPEND); // le @ rend les erreurs silencieuses
// Pour gérer l'erreur côté user : On peut le mettre dans une variable : si variable est fausse 'impossible d'écrire dans le dossier'/ex

// Lecture avec file_get_contents
#echo file_get_contents($fichier);


// Cas plus complexes

// Format .csv qui prends énormément de place et sature la mémoire
// Les fonctions en f ne lisent pas le contenu en entier mais au début et on peut déplacer le curseur
// fopen(fichier, action), fread(fichier, nb caractère), fseek, fgets(fichier) fait avancer le curseur d'une ligne à chaque exécution (tout en affichant la ligne courante)
// fwrite(ressource/fichier) Attention si on écrit en pleins dans le fichiers les caractères précédents s'effacent au profit des nouveau, s'utilise donc pour des rajouts en début et fin de fichier.
// Et on pense bien à fclose() à la fin du script ;p




?>