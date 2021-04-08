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
                        <button class="dropbtn active-nav"><b>Galéria</b></button>
                        <div class="dropdown-content">
                            <a href="rendezvenyek.php" class="active-nav">Rendezvények</a>
                            <a href="etelek.php">Ételek</a>
                        </div>
                    </div>
                    <a href="login.php">Belépés</a>

                </div>

            </div>

        </nav>

    </header>

      <div id="kepek">

        <div class="galeria">
          <a target="_blank" href="img/galeria/arany1.jpg">
            <img src="img/galeria/arany1.jpg" alt="arany1">
          </a>
        </div>

        <div class="galeria">
          <a target="_blank" href="img/galeria/arany2.jpg">
            <img src="img/galeria/arany2.jpg" alt="arany2">
          </a>
        </div>

        <div class="galeria">
          <a target="_blank" href="img/galeria/rozsaszin1.jpg">
            <img src="img/galeria/rozsaszin1.jpg" alt="rozsaszin1">
          </a>
        </div>

        <div class="galeria">
          <a target="_blank" href="img/galeria/rozsaszin2.jpg">
            <img src="img/galeria/rozsaszin2.jpg" alt="rozsaszin2">
          </a>
        </div>

        <div class="galeria">
          <a target="_blank" href="img/galeria/rozsaszin3.jpg">
            <img src="img/galeria/rozsaszin3.jpg" alt="rozsaszin3">
          </a>
        </div>

      </div>

      <footer id="global-footer">

        <table class="footer-table">

          <tr>
            <th id="footer4"></th>
            <th id="kozossegi4"></th>
          </tr>

            <tr>
                <td class="details" headers="footer4">
                    <div >
                            Étterem / Restaurant <br/>
                            Cegled Gastro Kft. <br/>
                            Tel.: +36-53/787-797 <br/>
                            Tel.: +36-70/466-30-44 <br/>
                            E-mail: cegledgastro@gmail.com <br/>
                            Hungary, Széchenyi út 11. <br/>         
                    </div>
                </td>

                <td headers="kozossegi4">
                    <div class="col links">
                        
                      <ul style="text-align: right">
                          <li>
                              <a href="https://www.facebook.com/KiskakasVendegloCegled" target="_blank" id="facebook">Facebook</a>
                          </li>
                          <li>
                              <a href="https://www.google.hu/maps/@47.1784265,19.7935229,3a,75y,209.15h,84.53t/data=!3m6!1e1!3m4!1swBSmr42-ULNHvh7RDpJaGg!2e0!7i13312!8i6656" target="_blank">Google Maps</a>
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