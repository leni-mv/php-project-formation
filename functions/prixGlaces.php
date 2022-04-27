<?php
// Calcul du prix d'une glace selon leur tarif et le nombre de cases cochées
// Récupérer soumission de formulaire
// Traiter-Additionner informations-cases cochées
// Retransmettre-afficher le calcul à la carde


//temps qu'il y a des parfums les enregistrer dans le tableau parfum
?> <pre>
  <?php var_dump($_GET); ?>
</pre> <br> <?php

$parfum = htmlspecialchars($_GET["parfum[]"]); ?> <br> <?php
echo $parfum;
$contenant = htmlspecialchars($_GET["contenant"]); ?> <br> <?php
echo $contenant;
$extra = htmlspecialchars($_GET["extra[]"]); ?> <br> <?php
echo $extra;
?>