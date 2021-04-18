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
                    <a href="etlap.php">Étlap</a>
                    <a href="itallap.php" class="active-nav">Itallap</a>
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
                    <a href="felh.php">Felhasználók</a>
                    <a href="logout.php">Kijelentkezés</a>
                    <?php endif; ?>

                </div>

            </div>

        </nav>

    </header>

    <div class="main">
        <h1 class="cimek">Szénsavas üdítők</h1>
        <table style="width:95%">

            <tr>
                <th id="nev13"></th>
                <th id="ar15"></th>
            </tr>

            <tr>
                <td headers="nev13">Coca-Cola 0,2</td>
                <td headers="ar15" class="arak">290.-</td>
            </tr>

            <tr>
                <td headers="nev13">Coke Zero lemon 0,2</td>
                <td headers="ar15" class="arak">290.-</td>
            </tr>

            <tr>
                <td headers="nev13">Coca-Cola Zero 0,2</td>
                <td headers="ar15" class="arak">290.-</td>
            </tr>

            <tr>
                <td headers="nev13">Fanta narancs 0,2</td>
                <td headers="ar15" class="arak">290.-</td>
            </tr>

            <tr>
                <td headers="nev13">Gyömbér 0,2</td>
                <td headers="ar15" class="arak">290.-</td>
            </tr>

            <tr>
                <td headers="nev13">Tonic 0,2</td>
                <td headers="ar15" class="arak">290.-</td>
            </tr>

            <tr>
                <td headers="nev13">Sprite 0,2</td>
                <td headers="ar15" class="arak">290.-</td>
            </tr>

            <tr>
                <td headers="nev13">Natur Aqua szénsavas ásványvíz 0,2</td>
                <td headers="ar15" class="arak">240.-</td>
            </tr>

        </table>

        <h1 class="cimek">Szénsavmentes üdítők</h1>
        <table style="width:95%">

            <tr>
                <th id="nev14"></th>
                <th id="ar16"></th>
            </tr>

            <tr>
                <td headers="nev14">Cappy (őszibarack, eper, körte, narancs, alma) 0,2</td>
                <td headers="ar16" class="arak">320.-</td>
            </tr>

            <tr>
                <td headers="nev14">Fuzetea őszibarackos 0,2</td>
                <td headers="ar16" class="arak">290.-</td>
            </tr>

            <tr>
                <td headers="nev14">Fuzetea citromos 0,2</td>
                <td headers="ar16" class="arak">290.-</td>
            </tr>

            <tr>
                <td headers="nev14">Natur Aqua szénsavmentes ásványvíz 0,2</td>
                <td headers="ar16" class="arak">240.-</td>
            </tr>

        </table>

        <h1 class="cimek">Házi limonádék</h1>
        <table style="width:95%">

            <tr>
                <th id="nev15"></th>
                <th id="ar17"></th>
            </tr>

            <tr>
                <td headers="nev15">Házi limonádé több ízben</td>
                <td headers="ar17" class="arak">150.-/dl</td>
            </tr>

        </table>

        <h1 class="cimek">Pálinkák</h1>
        <table style="width:95%">

            <tr>
                <th id="nev16"></th>
                <th id="ar18"></th>
                <th id="ar19"></th>
            </tr>

            <tr>
                <td></td>
                <td headers="ar18" class="mertek"><i><u>5 cl</u></i></td>
                <td headers="ar19" class="mertek"><i><u>3 cl</u></i></td>
            </tr>

            <tr>
                <td headers="nev16">Panyolai Vilmoskörte elixír</td>
                <td headers="ar18" class="arak">890.-</td>
                <td headers="ar19" class="arak">530.-</td>
            </tr>

            <tr>
                <td headers="nev16">Panyolai Szilva elixír</td>
                <td headers="ar18" class="arak">890.-</td>
                <td headers="ar19" class="arak">530.-</td>
            </tr>

            <tr>
                <td headers="nev16">Panyolai hagyományos körtepálinka</td>
                <td headers="ar18" class="arak">790.-</td>
                <td headers="ar19" class="arak">470.-</td>
            </tr>

            <tr>
                <td headers="nev16">Panyolai hagyományos meggypálinka</td>
                <td headers="ar18" class="arak">790.-</td>
                <td headers="ar19" class="arak">470.-</td>
            </tr>

            <tr>
                <td headers="nev16">Panyolai hagyományos szilvapálinka</td>
                <td headers="ar18" class="arak">790.-</td>
                <td headers="ar19" class="arak">470.-</td>
            </tr>

        </table>

        <h1 class="cimek">Étvágygerjesztők</h1>
        <table style="width:95%">

            <tr>
                <th id="nev17"></th>
                <th id="ar1122"></th>
            </tr>

            <tr>
                <td headers="nev17">Martini bianco 1dl</td>
                <td headers="ar1122" class="arak">800.-</td>
            </tr>

        </table>

        <h1 class="cimek">Röviditalok</h1>
        <table style="width:95%">

            <tr>
                <th id="nev18"></th>
                <th id="ar20"></th>
                <th id="ar21"> </th>
            </tr>

            <tr>
                <td headers="nev18"></td>
                <td headers="ar20" class="mertek"><i><u>5 cl</u></i></td>
                <td headers="ar21" class="mertek"><i><u>3 cl</u></i></td>
            </tr>

            <tr>
                <td headers="nev18">Bacardi</td>
                <td headers="ar20" class="arak">600.-</td>
                <td headers="ar21" class="arak">350.-</td>
            </tr>

            <tr>
                <td headers="nev18">Bailey's</td>
                <td headers="ar20" class="arak">650.-</td>
                <td headers="ar21" class="arak">400.-</td>
            </tr>

            <tr>
                <td headers="nev18">Ballantines</td>
                <td headers="ar20" class="arak">600.-</td>
                <td headers="ar21" class="arak">350.-</td>
            </tr>

            <tr>
                <td headers="nev18">Chivas Regal</td>
                <td headers="ar20" class="arak">980.-</td>
                <td headers="ar21" class="arak">600.-</td>
            </tr>

            <tr>
                <td headers="nev18">Finlandia vodka</td>
                <td headers="ar20" class="arak">600.-</td>
                <td headers="ar21" class="arak">350.-</td>
            </tr>

            <tr>
                <td headers="nev18">Jack Daniels</td>
                <td headers="ar20" class="arak">600.-</td>
                <td headers="ar21" class="arak">350.-</td>
            </tr>

            <tr>
                <td headers="nev18">Jagermeister</td>
                <td headers="ar20" class="arak">600.-</td>
                <td headers="ar21" class="arak">350.-</td>
            </tr>

            <tr>
                <td headers="nev18">Tequila Silver</td>
                <td headers="ar20" class="arak">550.-</td>
                <td headers="ar21" class="arak">350.-</td>
            </tr>

            <tr>
                <td headers="nev18">Unicum</td>
                <td headers="ar20" class="arak">600.-</td>
                <td headers="ar21" class="arak">350.-</td>
            </tr>

            <tr>
                <td headers="nev18">Unicum szilva</td>
                <td headers="ar20" class="arak">600.-</td>
                <td headers="ar21" class="arak">350.-</td>
            </tr>

            <tr>
                <td headers="nev18">Kalinka</td>
                <td headers="ar20" class="arak">550.-</td>
                <td headers="ar21" class="arak">300.-</td>
            </tr>

            <tr>
                <td headers="nev18">Jim Beam</td>
                <td headers="ar20" class="arak">550.-</td>
                <td headers="ar21" class="arak">330.-</td>
            </tr>

            <tr>
                <td headers="nev18">Johnie Walker</td>
                <td headers="ar20" class="arak">550.-</td>
                <td headers="ar21" class="arak">330.-</td>
            </tr>

        </table>

        <h1 class="cimek">Pezsgők</h1>
        <table style="width:95%">

            <tr>
                <th id="nev19"></th>
                <th id="ar22"></th>
            </tr>

            <tr>
                <td headers="nev19">BB muskotály Spumante édes pezsgő</td>
                <td headers="ar22" class="arak">2200.-</td>
            </tr>

            <tr>
                <td headers="nev19">Törley Dous pezsgő</td>
                <td headers="ar22" class="arak">2200.-</td>
            </tr>

            <tr>
                <td headers="nev19">Törley Muscat pezsgő</td>
                <td headers="ar22" class="arak">2200.-</td>
            </tr>

            <tr>
                <td headers="nev19">Törley Gála száraz pezsgő</td>
                <td headers="ar22" class="arak">2200.-</td>
            </tr>

            <tr>
                <td headers="nev19">Martini Prosecco pezsgő</td>
                <td headers="ar22" class="arak">4990.-</td>
            </tr>

        </table>

        <h1 class="cimek">Sörök</h1>
        <table style="width:95%">

            <tr>
                <th id="nev20"></th>
                <th id="ar23"></th>
            </tr>

            <tr>
                <td headers="nev20">Edelweiss Hefetrüb 0,5</td>
                <td headers="ar23" class="arak">700.-</td>
            </tr>

            <tr>
                <td headers="nev20">Gösser 0,33</td>
                <td headers="ar23" class="arak">400.-</td>
            </tr>

            <tr>
                <td headers="nev20">Heineken 0,33</td>
                <td headers="ar23" class="arak">400.-</td>
            </tr>

            <tr>
                <td headers="nev20">Soproni Ászok 0,5</td>
                <td headers="ar23" class="arak">400.-</td>
            </tr>

            <tr>
                <td headers="nev20">Staropramen dark 0,5</td>
                <td headers="ar23" class="arak">490.-</td>
            </tr>

        </table>
        <br>
        <br>
        <div>
            Áraink <b><mark>forint</mark></b>ban értendőek.
        </div>
    </div>

    <?php include_once "footer.php"; ?>

</body>

</html>