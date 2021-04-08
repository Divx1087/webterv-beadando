<?php

session_start();

?>

<!DOCTYPE html>
<html lang="hu">
    <head>
      <meta charset="UTF-8">

      <title>Kiskakas Vendéglő</title>

      <link rel="stylesheet" href="css/style.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    </head>

    <body>

    <header>
  
  <nav>

      <div id="navbar">

          <div class="logo">

              <div>
                  <img src="img/kiskakas_logo.png" alt="kiskakas_logo" class="logo">  
              </div>

          </div>

          <div id="links">
              <a href="index.php">Főoldal</a>
              <a href="rolunk.php">Rólunk</a>
              <a href="etlap.php">Étlap</a>
              <a href="itallap.php">Itallap</a>
              <div class="dropdown">
                  <button class="dropbtn"><b>Galéria</b></button>
                  <div class="dropdown-content">
                      <a href="rendezvenyek.php">Rendezvények</a>
                      <a href="etelek.php" class="active-nav">Ételek</a>
                  </div>
              </div>
            <?php if(!isset($_SESSION["user"]) || empty($_SESSION["user"])): ?>
                <a href="login.php" >Belépés</a>
            <?php else: ?>
                <a href="logout.php">Kijelentkezés</a>
  <?php endif; ?>	

          </div>

      </div>

  </nav>

</header>

      <div id="kepek">

        <div class="galeria-etelek">
          <a target="_blank" href="img/galeria/kaja1.jpg">
            <img src="img/galeria/kaja1.jpg" alt="kaja1" class="Image">
          </a>
        </div>

        <div class="galeria-etelek">
          <a target="_blank" href="img/galeria/kaja2.jpg">
            <img src="img/galeria/kaja2.jpg" alt="kaja2" class="Image">
          </a>
        </div>

        <div class="galeria-etelek">
          <a target="_blank" href="img/galeria/kaja3.jpg">
            <img src="img/galeria/kaja3.jpg" alt="kaja3" class="Image">
          </a>
        </div>

        <div class="galeria-etelek">
          <a target="_blank" href="img/galeria/kaja4.jpg">
            <img src="img/galeria/kaja4.jpg" alt="kaja4" class="Image">
          </a>
        </div>

        <div class="galeria-etelek">
          <a target="_blank" href="img/galeria/kaja5.jpg">
            <img src="img/galeria/kaja5.jpg" alt="kaja5" class="Image">
          </a>
        </div>

        <div class="galeria-etelek">
          <a target="_blank" href="img/galeria/kaja6.jpg">
            <img src="img/galeria/kaja6.jpg" alt="kaja6" class="Image">
          </a>
        </div>

        <div class="galeria-etelek">
          <a target="_blank" href="img/galeria/kaja7.jpg">
            <img src="img/galeria/kaja7.jpg" alt="kaja7" class="Image">
          </a>
        </div>

        <div class="galeria-etelek">
          <a target="_blank" href="img/galeria/kaja8.jpg">
            <img src="img/galeria/kaja8.jpg" alt="kaja8" class="Image">
          </a>
        </div>

        <div class="galeria-etelek">
          <a target="_blank" href="img/galeria/kaja9.jpg">
            <img src="img/galeria/kaja9.jpg" alt="kaja9" class="Image">
          </a>
        </div>

      </div>

      <?php include_once "footer.php"; ?>
      
  </body>

</html>