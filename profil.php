<?php

session_start();

include "functions.php"; 
if((!isset($_SESSION["user"])) || empty($_SESSION["user"])){
	header("Location: login.php");
}

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
                    <a href="login.php">Belépés</a>
                    <?php else: ?>
                    <a href="profil.php" class="active-nav">Profil</a>
                    <a href="felh.php">Felhasználók</a>
                    <a href="logout.php">Kijelentkezés</a>
                    <?php endif; ?>

                </div>

            </div>

        </nav>

    </header>

    <div>
        <?php
            $profilkep = "profilkep/default.jpg";
            $utvonal = "profilkep/" . $_SESSION["user"]["felhasznalonev"];
            $kiterjesztesek = ["png", "jpg", "jpeg"];

            foreach ($kiterjesztesek as $kiterjesztes) {
                if (file_exists($utvonal . "." . $kiterjesztes)) {
                    $profilkep = $utvonal . "." . $kiterjesztes;
                }
            }
        ?>

        <div>
            <img src="<?php echo $profilkep; ?>" alt="Profilkep" width="200">
            <?php if ($_SESSION["user"]["felhasznalonev"] !== "default") { ?>
                <form action="profil.php" method="POST" enctype="multipart/form-data">
                Válassz ki egy képet:
                <input type="file" name="profile-pic" accept="image/*">
                <input type="submit" value="Profilkép módosítása" name="upload-btn">
            </form>
            <?php } ?>
        </div>

        <?php

            if (isset($_POST["upload-btn"]) && is_uploaded_file($_FILES["profile-pic"]["tmp_name"])) {
                $error = ""; 
                uploadProfilePicture($_SESSION["user"]["felhasznalonev"]);

                $kit = strtolower(pathinfo($_FILES["profile-pic"]["name"], PATHINFO_EXTENSION));
                $utvonal = "profilkep/" . $_SESSION["user"]["felhasznalonev"] . "." . $kit;

                if ($error === "") {
                    if ($utvonal !== $profilkep && $profilkep !== "profilkep/default.jpg") {
                        unlink($profilkep);
                    }

                    header("Location: profil.php");
                } else {
                    echo "<p>" . $error . "</p>";
                }
            }
/*
        if (array_key_exists("profkep",$_FILES)) {
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

        $user_pic = $_FILES["profkep"]["name"];
        $default = "img/default.jpg";

        if(file_exists($user_pic)){
            $profile_picture = $user_pic;
        } else {
            $profile_picture = $default;
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
      }
*/
    ?>

    </div>

    <?php include_once "footer.php"; ?>

</body>

</html>