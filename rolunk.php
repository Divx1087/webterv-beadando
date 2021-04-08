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
                      <button class="dropbtn" ><b>Galéria</b></button>
                      <div class="dropdown-content">
                          <a href="rendezvenyek.php">Rendezvények</a>
                          <a href="etelek.php">Ételek</a>
                      </div>
                  </div>
                  <a href="login.php">Belépés</a>

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

    <footer id="global-footer">

      <table class="footer-table">

        <tr>
            <th id="footer7"></th>
            <th id="kozossegi7"></th>
          </tr>

          <tr>
              <td headers="footer7" class="details">
                  <div >
                          Étterem / Restaurant <br/>
                          Cegled Gastro Kft. <br/>
                          Tel.: +36-53/787-797 <br/>
                          Tel.: +36-70/466-30-44 <br/>
                          E-mail: cegledgastro@gmail.com <br/>
                          Hungary, Széchenyi út 11. <br/>         
                  </div>
              </td>

              <td headers="kozossegi7">
                  <div class="col links">
                      
                    <ul style="text-align: right">
                        <li>
                            <a href="https://www.facebook.com/KiskakasVendegloCegled" target="_blank" id="facebook">Facebook</a>
                        </li>
                        <li>
                            <a href="https://www.google.hu/maps/@47.1784265,19.7935229,3a,75y,209.15h,84.53t/data=!3m6!1e1!3m4!1swBSmr42-ULNHvh7RDpJaGg!2e0!7i13312!8i6656" target="_blank">Google maps</a>
                        </li>
                    </ul>

                  </div>

              </td>

          </tr>

      </table>

      <div class="legal">
          Copyright 2021. All Rights Reserved
      </div>

  </footer>

  </body>

</html>