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
              <a href="rolunk.php" class="active-nav">Rólunk</a>
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
                <a href="logout.php">Kijelentkezés</a>
            <?php endif; ?>	

          </div>

      </div>

  </nav>

</header>
        
  <div>
    
    <img src="img/festes.jpg" alt="etterem" id ="etterem-png">

    <div class="main-rolunk">
        <h1 class="rolunk-fooldal">Rólunk</h1>

        <p class="white-space">
            Kellemes környezettel, udvarias kiszolgálással várjuk Vendégeinket az éttermünkben, 
            emelett rendelkezünk kettő rendezvényteremmel is. 
            Változatos étlapunkon megtalálják a magyaros és a nemzetközi konyha különleges ízeit is. 
            A legfiatalabbak gyermek étlapról választhatnak.
            Éttermünk teraszára magával hozhatja házi kedvencét is.
        </p>
        
        <br>
        <br>

        <p class="white-space">
            Fizethetnek készpénzzel, meleg étkezési utalvánnyal, bankkártyával és a szerződéses partnerek átutalással.
            Ingyenes internetet biztosítunk vendégeink részére, ha lemerült a telefonja kérje kollegáink segítségét. 
            Rendelkezünk a legtöbb telefon feltöltéséhez szükséges adat kábellel és powerbankal.
        </p>

        <h1 class="rolunk-fooldal">Galéria</h1>

        <table id="rolunk-table">

            <tr>

                <td class="disp-table">

                    <a href="rendezvenyek.php" id="rendezvenyek-btn"><b>Rendezvények</b></a>

                </td>

                <td class="disp-table">

                    <a href="etelek.php" id="etelek-btn"><b>Ételek</b></a>

                </td>

            </tr>

        </table>        

    </div>

  </div>

  <?php include_once "footer.php"; ?>

  </body>

</html>