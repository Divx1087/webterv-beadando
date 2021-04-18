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
                    <a href="index.php" class="active-nav">Főoldal</a>
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
                    <a href="felh.php">Felhasználók</a>
                    <a href="logout.php">Kijelentkezés</a>
                    <?php endif; ?>

                </div>

            </div>

        </nav>

    </header>

    <div id="tooltip">
        <img src="img/kakas-kiszallitas.jpg" alt="kiszallitas" id="fixed-img">
        <span class="tooltiptext">Csak kiszállítás!</span>
    </div>

    <div>

        <div class="main-index">
            <article>
                <h1 class="rolunk-fooldal">Üdvözöljük a Kiskakas Étterem weboldalán!</h1>

                <p style="text-align: center">
                    Cegléden található éttermünk hosszú idők óta, a baráti összejövetelek, a sikeres üzleti ebédek, a
                    meghitt családi események találkozó helye.
                    <br>
                    Kedves kiszolgálással, megújult hangulatos belső térrel, a magyar gasztronómia legjavát
                    összeválogatva, sok szeretettel várjuk Önt és kedves családját!
                </p>

            </article>

            <br>
            <br>


            <article>
                <h1 class="rolunk-fooldal">Kedves vendégeink!</h1>

                <p style="text-align: center">
                    Ételeink kiszállítását vállaljuk Cegléden és környező településeken (Törtel, Csemő, Tápiószele,
                    Tápiószentmárton, Tápiószőlős, Ceglédbercel, Albertirsa).
                    <br>
                    Leterheltségünk függvényében távolabbi címekre is megpróbálunk eljutni, kérjük, hívja
                    diszpécserünket!
                    <br>
                    1000 Ft feletti rendeléseket díjtalanul szállítjuk környező településekre is.
                    <br>
                    Futáraink bankkártyát és Szép kártyát is elfogadnak!
                    <br>
                </p>

            </article>
            <br>
            <br>

            <div>
                <div class="multicolumn" style="padding:32px 64px">
                    <h3 class="rolunk-fooldal">A hely kiválóan alkalmas:</h3>
                </div>
                <p class="multi-newspaper">
                    céges, családi, baráti és egyéb rendezvények
                    <br>
                    osztálytalálkozók, ballagások, diplomaosztók szervezésére
                    <br>
                    esküvők, eljegyzések lebonyolítására
                    <br>
                    valamint állófogadásokra.
                </p>
            </div>


            <br>
            <br>

            <aside>
                <p style="text-align: center">
                    <b class="rolunk-fooldal">Nyitvatartás:</b>
                    <br>
                    Hétfő – Péntek 10:00 – 19:00
                    <br>
                    <strong>Megrendeléseiket minden nap 19:30-ig várjuk a +36-53/787-797 –es telefonszámon!</strong>
                    <br>
                </p>
            </aside>
        </div>
    </div>


    <?php include_once "footer.php"; ?>

</body>

</html>