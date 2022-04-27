<?php 
session_start();
// session_destroy();
$titre = 'Se connecter';

include '../common/header.php';

include '../functions/connexionSession.php';


//include '../common/cookieConnexion.php';

// Ajouter un password pour se connecter
  //La vérification du password se fera avec la partie mysql
// Faire l'affichage en js : assets/js/affichageProfil.js
  //déconnexion style.css mettre en display none ou visibility none

  print_r($_POST);
?>



<div class="connexionFormulaire">

  <form action="" method="post" class="container" 
  <?php 
  if ($connexionReussie) {
    echo "style=\"display: none;\"";
  } else {
    echo "style=\"display: block;\"";
  } ?>>
    <span class="input-group m-3 w-25">
      <span class="input-group-text">Pseudo : </span>
      <input type="text" class="form-control" name="nom" id="user">
    </span>
    

    <span class="input-group m-3 w-25">
      <span class="input-group-text">Pass : </span>
      <input type="password" class="form-control" name="pass" id="pass">
    </span>
    

    <span class="m-3 w-25">
      <input class="btn btn-primary" type="submit" value="Connexion" id="connexion">
    </span>

  </form>

</div>

<div class="m-5">

  <form action="" method="post" class="container" 
  <?php 
  if ($connexionReussie) {
    echo "style=\"display: block;\"";
  } else {
    // Si on click sur deconnexion la session est vidée et déconnexion remis à none
    echo "style=\"display: none;\"";
  } ?>>
    <span class="w-25">
      <input class="btn btn-secondary " type="submit" name="deconnexion" value="Déconnexion" id="deconnexion">
    </span>
  </form>

</div>



<?php include '../common/footer.php'; ?>
<script src="../assets/js/affichageProfil.js"></script>