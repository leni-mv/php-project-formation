<?php
session_start();

require_once '../common/header.php';
require_once '../functions/afficherListeRegions.php';
require_once '../functions/afficherListeDep.php';
require_once '../functions/afficherListeVille.php';
?>
<!-- creer form region en block select>options -->
<main class="container">

  <section class="row py-5">

    <div class="col-sm-3">
      <div class="input-group mb-3">

        <form action="trouveTaVille.php" method="post">
          <select class="form-select" name="region">
          <option value="0">--</option>
            <?php
              afficherListeRegions();
            ?>
          </select>
          <input id="buttonRegion" class="btn btn-primary" type="submit" value="Validez votre région">
        </form>

      </div>
    </div>

    <div class="col-3">
      <form action="trouveTaVille.php" method="post">
        <select class="form-select" id="departement" name="departement">
          <option value="0">--</option>
          <?php if (isset($_POST['region'])){
              afficherListeDep();
          }
           ?>
        </select>
        <input id="buttonDep" class="btn btn-primary" type="submit" value="Validez votre département">
      </form>
    </div>
  

  
    <div class="col-3">
      <form action="trouveTaVille.php" method="post">
        <select class="form-select" id="ville" name="ville">
          <option value="0">--</option>
          <?php if (isset($_POST['departement'])) {
            afficherListeVille();
           } ?>
        </select>
        <input id="buttonVille" class="btn btn-primary" type="submit" value="Validez votre ville">
      </form>
    </div>
    

  </section>

  <section class="test" id="test">
  <?php  ?>
  </section>

</main>

<!-- En none : idem departement et ville  -->
  
<?php
require_once '../common/footer.php';
?>