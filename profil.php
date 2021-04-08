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
                      <a href="etelek.php">Ételek</a>
                  </div>
              </div>
            <?php if(!isset($_SESSION["user"]) || empty($_SESSION["user"])): ?>
                <a href="login.php" >Belépés</a>
            <?php else: ?>
                <a href="profil.php" class="active-nav">Profil</a>
                <a href="logout.php">Kijelentkezés</a>
            <?php endif; ?>	

          </div>

      </div>

    </nav>

</header>
        
    <div>
    
    <form action="process.php" method="POST" enctype="multipart/form-data">
      <label for="file-upload">Profilkép:</label>
      <!-- Csak képfájlokat szeretnénk engedélyezni a feltöltés során -->
      <input type="file" id="file-upload" name="profile-pic" accept="image/*"/> <br/>
      <input type="submit" name="upload-btn" value="Feltöltés"/>
    </form>

    </div>

  </div>

  <?php include_once "footer.php"; ?>

  </body>

</html>