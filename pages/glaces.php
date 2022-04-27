<?php 
$titre = 'Glaces';
  include '../common/header.php'; 
?>

  

  <main class="container">
  <h1>Précommandez votre glace en ligne !</h1>

  <?php include '../functions/prixGlaces.php'; ?>
  
  <div class="row">
    <form action="#" method="GET" class="col-6">
      <div class="p-2">
        <h3>Parfums :</h3>
        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="framboise" name="parfum[]" id="flexCheckDefault">
          <label class="form-check-label" for="flexCheckDefault">
            Framboise
          </label>
        </div>

        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="cassis" name="parfum[]" id="flexCheckDefault">
          <label class="form-check-label" for="flexCheckDefault">
            Cassis
          </label>
        </div>
      </div>


      <div class="p-2">
        <h3>Contenant :</h3>
        <div class="form-check">
          <input class="form-check-input" type="radio" value="pot" name="contenant" id="flexRadioDefault1">
          <label class="form-check-label" for="flexRadioDefault1">
            Pot
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" value="cornet" name="contenant" id="flexRadioDefault2" checked>
          <label class="form-check-label" for="flexRadioDefault2">
          Cornet
          </label>
        </div>
      </div>

      <div class="p-2">
        <h3>Extras :</h3>
        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="chantilly" name="extra[]" id="flexCheckDefault">
          <label class="form-check-label" for="flexCheckDefault">
            Chantilly
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="minis-marshmallow" name="extra[]" id="flexCheckChecked" checked>
          <label class="form-check-label" for="flexCheckChecked">
            minis-marshmallow
          </label>
        </div>
      </div>

      <div class="col-12 p-1">
        <button class="btn btn-primary" type="submit">Commander</button>
      </div>
    </form>

      <div class="col-6">
        <div class="card px-0">

          <div class="card-header">
            Votre commande
          </div>

          <div class="card-body">
            <h5 class="card-title">Articles : </h5>
            <p class="card-text">List php</p>
            <p class="card-text">Prix php</p>
          </div>

        </div>
      </div>
      
    </div>
  </main>
  
<?php include '../common/footer.php'; ?>