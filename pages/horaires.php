<?php 
$titre = 'Nos Horaires';
include '../common/header.php'?>

  <div class="container">
    <h1>Horaires d'ouvertures :</h1>

    <div class="w-50">
      <?php include '../functions/afficherHoraires.php'; ?>
    </div>
  </div>

  <?php include '../common/footer.php'; ?>

</body>
</html>