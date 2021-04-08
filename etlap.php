<?php

session_start();
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
              <a href="etlap.php" class="active-nav">Étlap</a>
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
  <div class="main">
    <h1 class ="cimek">Előételek</h1>
    <table style="width:95%">
      <tr>
        <th id="nev"></th>
        <th id="ar1"></th>
        <th id="ar2"></th>
      </tr>

      <tr>
        <td headers="nev">Tatár beefsteak kerti zöldségekkel, pirítóssal, vajjal</td>
        <td headers="ar1" class ="arak">10dkg: 1990.-</td>
        <td headers="ar2" class ="arak">20dkg: 3690.-</td>
      </tr>

      <tr>
        <td headers="nev">Caesar saláta</td>
        <td headers="ar1 ar2" colspan="2"  class ="arak">1890.-</td>
      </tr>

    </table>

    <h1 class ="cimek">Levesek</h1>
    <table style="width:95%">
      <tr>
        <th id="nev1"></th>
        <th id="ar3"></th>
      </tr>

      <tr>
        <td headers="nev1">Hideg málnakrémleves vanília fagylalttal, mentával</td>
        <td headers="ar3" class ="arak">700.-</td>
      </tr>

      <tr>
        <td headers="nev1">Kiskakas ünnepi szárnyas húslevese gazdagon (tyúk-kakas leves)</td>
        <td class ="arak">890.-</td>
      </tr>

      <tr>
        <td>Tárkonyos raguleves citrommal ékesítve</td>
        <td class ="arak">890.-</td>
      </tr>

    </table>

    <h1 class ="cimek">Sertéshúsból készített ételeink</h1>
    <table style="width:95%">

      <tr>
        <th id="nev2"></th>
        <th id="ar4"></th>
      </tr>

      <tr>
        <td headers="nev2">Betyár betyu (füstölt tarjával, sajttal, pepperónival töltve-rántva), vegyes körettel</td>
        <td headers="ar4" class ="arak">2400.-</td>
      </tr>

      <tr>
        <td headers="nev2">Konfitált tarjaa grillkolbásszal, dijoni mustáros steakburgonyával és tormamártással</td>
        <td headers="ar4" class ="arak">3100.-</td>
      </tr>

      <tr>
        <td headers="nev2">Grillezett sertéskaraj libamájjal, vargányás erdei gombapaprikással és túrós csuszával</td>
        <td headers="ar4" class ="arak">3400.-</td>
      </tr>

    </table>

    <h1 class ="cimek">Sertéshúsból készített ételeink</h1>
    <table style="width:95%">

      <tr>
        <th id="nev3"></th>
        <th id="ar5"></th>
      </tr>

      <tr>
        <td headers="nev3">Kakaspörkölt Kiskakas-módra (taréjjal-kakasherével), galuskával</td>
        <td headers="ar5" class ="arak">3290.-</td>
      </tr>

      <tr>
        <td headers="nev3">Bőrös csirkemell steak tejszínes gombamártással, jázmin rizzsel és csónak burgonyával</td>
        <td headers="ar5" class ="arak">2790.-</td>
      </tr>

      <tr>
        <td headers="nev3">Mandulás köntösben kisütött, aszalt szilvás-camembertes csirkemell tekercs krokettel és forró gyümölcs-mártogatóssal</td>
        <td headers="ar5" class ="arak">2790.-</td>
      </tr>

    </table>

        <h1 class ="cimek">Marhahúsból készített ételeink</h1>
        <table style="width:95%">

          <tr>
            <th id="nev4"></th>
            <th id="ar6"></th>
          </tr>

          <tr>
            <td headers="nev4">Bélszín steak sistergő lávakövön sütve mustáros borskéregben, steakburgonyával, grill zöldségekkel</td>
            <td headers="ar6" class ="arak">4400.-</td>
          </tr>

          <tr>
            <td headers="nev4">Bélszín steak választható mártással és rozmaringos-sajtos steakburgonyával</td>
            <td headers="ar6" class ="arak">4400.-</td>
          </tr>

        </table>

        <h1 class ="cimek">Kalandozás a halételek birodalmában</h1>
        <table style="width:95%">

          <tr>
            <th id="nev5"></th>
            <th id="ar7"></th>
          </tr>

          <tr>
            <td headers="nev5">Harcsapaprikás túrós csuszával, tepertővel</td>
            <td headers="ar7" class ="arak">3390.-</td>
          </tr>

          <tr>
            <td headers="nev5">Szürkeharcsa nyárs ropogós magvas köntösben, burgonyapürével, tartármártással</td>
            <td headers="ar7" class ="arak">3590.-</td>
          </tr>

        </table>

        <h1 class ="cimek">Kiskakas tál <em id="talak">- 2 személyes</em></h1>
        <table style="width:95%">

          <tr>
            <th id="nev6"></th>
            <th id="ar8"></th>
          </tr>

          <tr>
            <td headers="nev6">Aszalt szilvával, camemberttel töltött csirkemell rántva</td>
            <th headers="ar8"></th>
          </tr>
          <tr>
            <td headers="nev6">Vaslapon sült zöldfűszeres csirkemell</td>
            <th headers="ar8"></th>
          </tr>
          <tr>
            <td headers="nev6">Mustáros sertéstarja</td>
            <th headers="ar8"></th>
          </tr>
          <tr>
            <td headers="nev6">Rántott gomba-sajt, hasábburgonya, párolt rizs, grill zöldség</td>
            <td headers="ar8" class ="arak">3500.-</td>
          </tr>

        </table>

        <h1 class ="cimek">Kímélő és vegetáriánus ételek</h1>
        <table style="width:95%">

          <tr>
            <th id="nev7"></th>
            <th id="ar9"></th>
          </tr>

          <tr>
            <td headers="nev7">Camembert sajt mandula bundában, ropogós köntösben, kékáfonya mártással, jázmin rizzsel</td>
            <td headers="ar9" class ="arak">2390.-</td>
          </tr>
          <tr>
            <td headers="nev7">Rántott gomba párolt rizzsel, tartármártással</td>
            <td headers="ar9" class ="arak">1790.-</td>
          </tr>
          <tr>
            <td headers="nev7">Görög saláta</td>
            <td headers="ar9" class ="arak">1090.-</td>
          </tr>

        </table>

        <h1 class ="cimek">Gyermek étlap</h1>
        <table style="width:95%">

          <tr>
            <th id="nev8"></th>
            <th id="ar10"></th>
          </tr>

          <tr>
            <td headers="nev8">Nyuszifül tányér (rántott csirkemell, hasábburgonya, tartár, ketchup)</td>
            <td headers="ar10" class ="arak">1590.-</td>
          </tr>
          <tr>
            <td headers="nev8">Miki egér sajtos csemegéje magvas bundában hasábburgonyával, ketchuppal</td>
            <td headers="ar10" class ="arak">1090.-</td>
          </tr>

        </table>

        <h1 class ="cimek">Retro ételeink</h1>
        <table style="width:95%">

          <tr>
            <th id="nev9"></th>
            <th id="ar11"></th>
          </tr>

          <tr>
            <td headers="nev9">Brassói aprópecsenye</td>
            <td headers="ar11" class ="arak">2190.-</td>
          </tr>
          <tr>
            <td headers="nev9">Corbon bleu vegyes körettel</td>
            <td headers="ar11" class ="arak">2490.-</td>
          </tr>
          <tr>
            <td headers="nev9">Rántott szelet hasábburgonyával</td>
            <td headers="ar11" class ="arak">1990.-</td>
          </tr>

        </table>

        <h1 class ="cimek">Desszertek</h1>
        <table style="width:95%">

          <tr>
            <th id="nev10"></th>
            <th id="ar12"></th>
          </tr>

          <tr>
            <td headers="nev10">Somlói galuska</td>
            <td headers="ar12" class ="arak">990.-</td>
          </tr>
          <tr>
            <td headers="nev10">Édes álom (gyümölcssaláta ágyon somlói galuska, eper fagylalt, tejszínhab, csokoládé öntet)</td>
            <td headers="ar12" class ="arak">1090.-</td>
          </tr>
          <tr>
            <td headers="nev10">Kiskakas töltött palaincsta (édes morzsában rántott túrós palacsinta, meggyraguval)</td>
            <td headers="ar12" class ="arak">990.-</td>
          </tr>
          <tr>
            <td headers="nev10">Palacsinta kívánság szerint (túrós, lekváros, kakaós, nutellás)</td>
            <td headers="ar12" class ="arak">230.-/db</td>
          </tr>

        </table>

        <h1 class ="cimek">Saláták, savanyúságok</h1>
        <table style="width:95%">

          <tr>
            <th id="nev11"></th>
            <th id="ar13"></th>
          </tr>

          <tr>
            <td headers="nev11">Tejfölös uborkasaláta</td>
            <td headers="ar13" class ="arak">690.-</td>
          </tr>
          <tr>
            <td headers="nev11">Házi káposztasaláta</td>
            <td headers="ar13" class ="arak">690.-</td>
          </tr>
          <tr>
            <td headers="nev11">Csemege uborka</td>
            <td headers="ar13" class ="arak">690.-</td>
          </tr>
          <tr>
            <td headers="nev11">Kovászos uborka</td>
            <td headers="ar13" class ="arak">690.-</td>
          </tr>
          <tr>
            <td headers="nev11">Almapaprika</td>
            <td headers="ar13" class ="arak">690.-</td>
          </tr>

        </table>

        <h1 class ="cimek">Szószok</h1>
        <table style="width:95%">

          <tr>
            <th id="nev12"></th>
            <th id="ar14"></th>
          </tr>

          <tr>
            <td headers="nev12">Ketchup</td>
            <td headers="ar14" class ="arak">200.-</td>
          </tr>
          <tr>
            <td headers="nev12">Mustár</td>
            <td headers="ar14" class ="arak">200.-</td>
          </tr>
          <tr>
            <td headers="nev12">Tartár</td>
            <td headers="ar14" class ="arak">200.-</td>
          </tr>

        </table>

        <br>
        <br>
        <br>
        <div>
          Féladag étel rendelésekor
          <b>70%</b>-os ár kerül felszámításra.
        </div>

        <div>
          Csomagolás díja: <b>100.-</b>
        </div>

        <br>
        <br>
        <div>
          Áraink <b><mark>forint</mark></b>ban értendőek.
        </div>
      </div>

      <?php include_once "footer.php"; ?>
      
    </body>
</html>