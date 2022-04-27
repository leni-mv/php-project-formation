<?php 
  session_start();
  $titre = 'Home';
  include '../common/header.php'; 
?>

  <main class="container my-5">
    <h1>Bienvenue <?php if (isset($_SESSION['nom'])) echo $_SESSION['nom'] ?> !</h1>
  </main>
  
<?php include '../common/footer.php'; ?>
