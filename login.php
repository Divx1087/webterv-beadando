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
                        <a href="login.php" class="active-nav">Belépés</a>
                    <?php else: ?>
                        <a href="profil.php">Profil</a>
                        <a href="felh.php">Felhasználók</a>
                        <a href="logout.php">Kijelentkezés</a>
					<?php endif; ?>	
  
                  </div>
  
              </div>
  
          </nav>
  
      </header>

        <form action="login.php" id="login" method="POST" autocomplete="off">
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

                <input type="submit" name="login" value="Bejelentkezés" class="reg-btn">
            </fieldset>
        </form>

        <?php
            $user = "";
            $password = "";

            if(isset($_POST["login"])){
                $user = $_POST["felhasznalonev"];
                $password = $_POST["jelszo"];
                
                $file = fopen("felhasznalok.txt", "r");
                $uzenet = false;
                
                if($file === false){
                    die("Hiba a fájl megnyitása során!");
                }
                
                $users = betoltes("felhasznalok.txt");
                
                foreach($users as $oldusers){
                    if($user === $oldusers["felhasznalonev"] && $password === $oldusers["reg-jelszo"]){
                        $user_data = ["felhasznalonev" => $oldusers["felhasznalonev"], "email" => $oldusers["email"]];
                        $uzenet = true;
                        break;
                    }
                }
                
                if($uzenet){
                    $_SESSION["user"] = $user_data;
                    header("Location: index.php");
                    echo "Sikeres belépés!";
                } else {
                    echo "Sikertelen belépés!";
                }
                        }
        ?>

        <div id="belepes">
                <iframe src="https://kiskakasvendeglo.eu/login" title="Facebook" class="iframe-kakaseu"></iframe>
        </div>

        

            <form id="registration" method="POST" autocomplete="off">
                <fieldset>
                    
                    <legend id="regisztracio"> Regisztráció</legend>
                    <table class="center-table">

                        <tr>
                            <th id="nev22"></th>
                            <th id="bemenet1"></th>
                            </tr>

                        <tr>
                            <td headers="nev22">Vezetéknév:</td>
                            <td headers="bemenet1"><input type="text" name="vezeteknev" style="margin-top:5px"/></td>
                        </tr>

                        <tr>
                            <td headers="nev22">Keresztnév:</td>
                            <td headers="bemenet1"><input type="text" name="keresztnev" style="margin-top:5px"/></td>
                        </tr>

                        <tr>
                            <td headers="nev22">Felhasználónév:</td>
                            <td headers="bemenet1"><input type="text" name="felhasznalonev" style="margin-top:5px"/></td>
                        </tr>

                        <tr>
                            <td headers="nev22">E-mail:</td>
                            <td headers="bemenet1"><input type="text" name="email" style="margin-top:5px"/></td>
                        </tr>

                        <tr>
                            <td headers="nev22"><label for="reg-password">Jelszó:</label></td>
                            <td headers="bemenet1"><input type="password" id="reg-password" name="reg-jelszo" style="margin-top:5px"/></td>
                        </tr>

                        <tr>
                            <td headers="nev22"><label for="reg-password">Jelszó:</label></td>
                            <td headers="bemenet1"><input type="password" id="reg-password" name="reg-jelszo2" style="margin-top:5px"/></td>
                        </tr>

                    </table>

                    <input type="submit" name="register" value="Regisztráció" class="reg-btn">

                    <input type="reset" value="Adatok törlése" class ="reg-btn">
                </fieldset>
            </form>

            <?php
					$veznev = "";
					$kernev = "";
                    $felhnev = "";
                    $jelszo = "";
                    $jelszo2 = "";
					$emailc = "";
                    $hiba = [];
					
					if(isset($_POST["register"])){
						$oldusers = betoltes("felhasznalok.txt");
						if(!empty($_POST["vezeteknev"])){
							$veznev = $_POST["vezeteknev"];
						} else {
							$hiba[] = "Add meg a vezetékneved!";
						}	

						if(!empty($_POST["keresztnev"])){
							$kernev = $_POST["keresztnev"];
						} else {
							$hiba[] = "Add meg a keresztneved!";
						}

                        if(!empty($_POST["felhasznalonev"])){
							$felhnev = $_POST["felhasznalonev"];
						} else {
							$hiba[] = "Add meg a felhasználóneved!";
						}

                        if(!empty($_POST["reg-jelszo"])){
							$jelszo = $_POST["reg-jelszo"];
						} else {
							$hiba[] = "Add meg a jelszavad!";
						}

                        if(!empty($_POST["reg-jelszo2"])){
							$jelszo2 = $_POST["reg-jelszo2"];
						} else {
							$hiba[] = "Add meg a jelszavad!";
						}

                        if(!empty($_POST["email"])){
							$emailc = $_POST["email"];
						} else {
							$hiba[] = "Add meg a e-mail címed!";
						}
						

                        foreach($oldusers as $olduser){
                            if($felhnev === $olduser["felhasznalonev"]){
                                $hiba[] = "A felhasználónév már foglalt";
                            }
                        }

                        foreach($oldusers as $olduser){
                            if($emailc === $olduser["email"]){
                                $hiba[] = "Ezzel az e-mail címmel már regisztráltak";
                            }
                        }

                        if(strlen($jelszo) < 8){
                            $hiba[] = "A jelszó legalább 8 karakter hosszú kell legyen!";
                        }

                        if(!preg_match('/[A-Za-z]/', $jelszo) || !preg_match('/[0-9]/', $jelszo)){
                            $hiba[] = "A jelszónak tartalmaznia kell betűt és számot egyaránt!";
                        }

                        if($jelszo !== $jelszo2){
                            $hiba[] = "A két jelszó nem egyezik meg!";
                        }

                        if(count($hiba) === 0){
							echo "Sikeres regisztráció!" . "<br/>";
							$newuser = [
								"vezeteknev" => $veznev,
								"keresztnev" => $kernev,
								"felhasznalonev" => $felhnev,
								"reg-jelszo" => $jelszo,
								"email" => $emailc
							];

							kiiras($newuser, "felhasznalok.txt", "a");
							
						} else {
							foreach($hiba as $hibak){
								echo $hibak . "<br/>";
							}
						}	
						
					}
					
				?>

        <?php include_once "footer.php"; ?>

    </body>

</html>