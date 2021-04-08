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
                            <a href="rendezvenyek.php">Rendezvények</a>
                            <a href="etelek.php" class="active-nav">Ételek</a>
                        </div>
                    </div>
                    <a href="login.php" >Belépés</a>

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

      <footer id="global-footer">

        <table class="footer-table">

          <tr>
            <th id="footer5"></th>
            <th id="kozossegi5"></th>
          </tr>

            <tr>
                <td headers="footer5" class="details">
                    <div >
                            Étterem / Restaurant <br/>
                            Cegled Gastro Kft. <br/>
                            Tel.: +36-53/787-797 <br/>
                            Tel.: +36-70/466-30-44 <br/>
                            E-mail: cegledgastro@gmail.com <br/>
                            Hungary, Széchenyi út 11. <br/>         
                    </div>
                </td>

                <td headers="kozossegi5">
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