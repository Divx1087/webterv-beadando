<?php

session_start();

include "functions.php"; 


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
    


    <form action="profil.php" method="post" enctype="multipart/form-data">
      Select image to upload:
      <input type="file" name="profkep" id="profkep">
      <input type="submit" value="Upload Image" name="feltoltes">
    </form>
    
    <?php

              $prof ="";

              if(!empty($_POST["profkep"])){
                $prof = $_POST["profkep"];
              } else {
                $hiba[] = "Add meg a profilképed!";
              }

      $target_dir = "profilkep/";
      $target_file = $target_dir . basename($_FILES["profkep"]["name"]);
      $uploadOk = 1;
      $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
      if(isset($_POST["feltoltes"])) {
        $check = getimagesize($_FILES["profkep"]["tmp_name"]);
        if($check !== false) {
          echo "A fájl egy kép - " . $check["mime"] . ".";
          $uploadOk = 1;
        } else {
          echo "A fájl nem egy kép.";
          $uploadOk = 0;
        }
      }

      if ($_FILES["profkep"]["size"] > 500000) {
        echo "Túl nagy méretű fájl.";
        $uploadOk = 0;
      }

      if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
        echo "Csak JPG, JPEG és PNG formátum feltölthető.";
        $uploadOk = 0;
      }


      if ($uploadOk == 0) {
        echo "A fájl nem lett feltöltve.";
      } else {
        if (move_uploaded_file($_FILES["profkep"]["tmp_name"], $target_file)) {
          echo "A fájl ". htmlspecialchars( basename( $_FILES["profkep"]["name"])). " feltöltve.";
        } else {
          echo "Hiba lépett a feltöltés során.";
        }
      }


    ?>

    </div>

  </div>

  <?php include_once "footer.php"; ?>

  </body>

</html>