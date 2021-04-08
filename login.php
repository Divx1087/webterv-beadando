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
                      <a href="login.php" class="active-nav">Belépés</a>
  
                  </div>
  
              </div>
  
          </nav>
  
      </header>

        <form id="login" method="POST">
            <fieldset>
                <legend id="bejelentkezes">Bejelentkezés</legend>

                <table class="center-table">

                    <tr>
                        <th id="nev21"></th>
                        <th id="bemenet"></th>
                    </tr>

                    <tr>
                        <td headers="nev21">Felhasználónév:</td>
                        <td headers="bemenet"><input type="text" name="felhasznalonev" required style="margin-top:5px"/></td>
                    </tr>

                    <tr>
                        <td headers="nev21"><label for="my-password">Jelszó:</label></td>
                        <td headers="bemenet"><input type="password" id="my-password" name="jelszo" required style="margin-top:5px"/></td>
                    </tr>

                    <tr>
                        <td colspan="2" headers="bemenet">
                            <input type="checkbox" value="ls-remember-me" id="remember-me"/> <label for="remember-me">Emlékezz rám</label>
                        </td>
                    </tr>

                    <tr>
                        <td colspan="2" headers="bemenet">
                            <input type="hidden" id="custum-id" name="custom-id" value="6969"/>
                        </td>
                    </tr>

                </table>

                <input type="submit" value="Bejelentkezés" class="reg-btn">
            </fieldset>
        </form>

        <div id="belepes">
                <iframe src="https://kiskakasvendeglo.eu/login" title="Facebook" class="iframe-kakaseu"></iframe>
        </div>

        

            <form id="registration" method="POST">
                <fieldset>
                    
                    <legend id="regisztracio"> Regisztráció</legend>
                    <table class="center-table">

                        <tr>
                            <th id="nev22"></th>
                            <th id="bemenet1"></th>
                            </tr>

                        <tr>
                            <td headers="nev22">Vezetéknév:</td>
                            <td headers="bemenet1"><input type="text" name="vezeteknev" required style="margin-top:5px"/></td>
                        </tr>

                        <tr>
                            <td headers="nev22">Keresztnév:</td>
                            <td headers="bemenet1"><input type="text" name="keresztnev" required style="margin-top:5px"/></td>
                        </tr>

                        <tr>
                            <td headers="nev22">Felhasználónév:</td>
                            <td headers="bemenet1"><input type="text" name="felhasznalonev" required style="margin-top:5px"/></td>
                        </tr>

                        <tr>
                            <td headers="nev22"><label for="reg-password">Jelszó:</label></td>
                            <td headers="bemenet1"><input type="password" id="reg-password" name="jelszo" required style="margin-top:5px"/></td>
                        </tr>

                        <tr>
                            <td headers="nev22">E-mail:</td>
                            <td headers="bemenet1"><input type="text" name="email" required style="margin-top:5px"/></td>
                        </tr>

                        <tr>
                            <td headers="nev22">E-mail újra:</td>
                            <td headers="bemenet1"><input type="text" name="email" required style="margin-top:5px"/></td>
                        </tr>

                    </table>

                    <input type="submit" value="Regisztráció" class="reg-btn">

                    <input type="reset" value="Adatok törlése" class ="reg-btn">
                </fieldset>
            </form>

        <footer id="global-footer">

            <table class="footer-table">

                <tr>
                    <th id="footer3"></th>
                    <th id="kozossegi3"></th>
                    </tr>

                <tr>
                    <td headers="footer3" class="details">
                        <div >
                                Étterem / Restaurant <br/>
                                Cegled Gastro Kft. <br/>
                                Tel.: +36-53/787-797 <br/>
                                Tel.: +36-70/466-30-44 <br/>
                                E-mail: cegledgastro@gmail.com <br/>
                                Hungary, Széchenyi út 11. <br/>         
                        </div>
                    </td>

                    <td headers="kozossegi3">
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