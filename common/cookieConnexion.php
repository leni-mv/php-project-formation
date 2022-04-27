<?php
//Créer un cookie
# setcookie('user', 'Popy', time()+ 60 * 30,);
//param : nom du cookie, valeur, temps avant expiration
// Ces trois paramètres suffisent généralement

//Récupérer et intéragir avec les cookies
# var_dump($_COOKIE); 



//On récupère la donnée du formulaire
if (!empty($_POST['nom'])) {
  setcookie('nom', htmlentities($_POST['nom']));
}
$nom = null;
if (!empty($_COOKIE['nom'])) {
  $nom = $_COOKIE['nom'];
}

if ($nom) {
  echo "<h1> Bonjour $nom </h1>";
  // Remplacer login par Profil => Deconnexion (on le fait en js pour pas galérer ?)
}
?>