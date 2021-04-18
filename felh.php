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
                    <a href="profil.php">Profil</a>
                    <a href="felh.php" class="active-nav">Felhasználók</a>
                    <a href="logout.php">Kijelentkezés</a>
                    <?php endif; ?>

                </div>

            </div>

        </nav>

    </header>

    <div>

        <?php

    $felhasznalok = betoltes("felhasznalok.txt");

        if(array_key_exists('kereses', $_GET) && boolval($_GET['kereses'])) {
            $keresesStr = $_GET['kereses'];
            $felhasznalok = array_filter($felhasznalok, function($felhasznalo) use($keresesStr){
                return strpos($felhasznalo['vezeteknev'], $keresesStr) !== false || strpos($felhasznalo['keresztnev'], $keresesStr) || strpos($felhasznalo['email'], $keresesStr);
            });
        }
            
    ?>


        <form action="felh.php" method="GET">
            <label>Felhasználók keresése</label>
            <input type="text" name="kereses" <?php echo(isset($keresesStr) ? "value=$keresesStr" : "")?>
                placeholder="Név vagy email">
            <button>Beküldés</button>
        </form>

        <?php
         echo('<hr>');
         foreach($felhasznalok as $felhasznalo) {
             $felhasznalo = (object)$felhasznalo;
             echo("<div>Név: $felhasznalo->vezeteknev $felhasznalo->keresztnev</div>");
             echo("<div>Email: $felhasznalo->email</div><hr>");
         }
         if(count($felhasznalok) === 0) {
             echo("Nincsenek felhasználok".(isset($keresesStr) ? ' amik megfelelnek a keresési feltételnek' : ''));
         }

    ?>

    </div>

    <?php include_once "footer.php"; ?>

</body>

</html>