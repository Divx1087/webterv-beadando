<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="hu">
  <head>
    <title>Főoldal</title>
    <meta charset="UTF-8"/>
    <link rel="stylesheet" href="css/style.css"/>
  </head>
  <body>
    <main>
      <!-- Fejléc -->

      <header>
        <h1>Az én klassz weboldalam</h1>
      </header>

      <!-- Navigációs Menü -->

      <nav>
        <ul>
          <li class="active"><a href="index.php">Főoldal</a></li>
          <?php if (isset($_SESSION["user"])) { ?>
            <li><a href="profile.php">Profilom</a></li>
            <li><a href="logout.php">Kijelentkezés</a></li>
          <?php } else { ?>
            <li><a href="login.php">Bejelentkezés</a></li>
            <li><a href="signup.php">Regisztráció</a></li>
          <?php } ?>
        </ul>
      </nav>

      <!-- Az oldal tartalma -->

      <section id="content">
        <h2>Főoldal</h2>
        <hr/>

        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent malesuada lectus quis nibh volutpat, in sollicitudin nunc sagittis. Interdum et malesuada fames ac ante ipsum primis in faucibus. Fusce tincidunt consectetur arcu, sed pellentesque nisl ullamcorper vitae. Cras scelerisque pellentesque eros, ac elementum enim eleifend et. Ut posuere metus vitae ultrices bibendum. Duis varius eget risus quis faucibus. Quisque sem lectus, varius a tellus nec, blandit vehicula ipsum. Duis eget neque nulla. Phasellus interdum velit vitae sollicitudin eleifend. Duis a luctus ante. Proin luctus fringilla urna, a venenatis orci fringilla ultricies. Donec sit amet tellus et erat fermentum ultrices. Donec fermentum, sapien ac pulvinar rutrum, lacus quam maximus urna, a efficitur lectus purus elementum justo. Cras gravida ex urna, eget dignissim ipsum dictum et.</p>
        <p>Maecenas et convallis felis. Maecenas id justo in quam dapibus cursus. Nunc eu convallis magna, id dictum ante. Maecenas rutrum quam a augue finibus, quis cursus arcu lobortis. Morbi elementum nibh nec tortor vestibulum porttitor. Cras auctor in ex vitae commodo. Aenean ut maximus nulla. Donec massa lorem, efficitur ac sem a, imperdiet interdum turpis. Praesent sed lacinia magna. Suspendisse a dui non massa aliquam iaculis id tempus nisl. Integer ut eros in massa elementum rutrum. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nam non elit erat. Sed consectetur lectus in dui euismod placerat. Maecenas dictum neque elit, et lobortis dolor aliquet ut.</p>
        <p>Duis accumsan rutrum leo, quis vulputate augue condimentum non. In id dui id lectus pellentesque ornare in at ipsum. Morbi accumsan urna vitae sagittis imperdiet. Proin iaculis nec ex vel malesuada. Phasellus ultrices in sem non sodales. Donec laoreet nulla non mollis dictum. Integer sed pharetra nisl. Aliquam a turpis at lacus euismod pellentesque quis non nibh. Curabitur porttitor nisl vehicula luctus sagittis. Morbi ut erat placerat, auctor mauris eget, gravida lorem. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Sed in turpis diam.</p>
        <p>Nullam accumsan, quam non congue pulvinar, est lectus suscipit neque, id aliquet eros leo a velit. Nulla vel urna faucibus, aliquet dolor eget, auctor arcu. Morbi tempus velit a mi mattis gravida. Quisque consectetur urna nisl, feugiat luctus dui vestibulum in. Proin varius sapien in ullamcorper convallis. Mauris sit amet aliquet orci. Nulla rhoncus nulla eu lorem feugiat tincidunt. Vestibulum nec mauris erat. Proin eu ante blandit, accumsan elit malesuada, pellentesque leo. Duis iaculis neque sed aliquet eleifend. Nullam volutpat turpis vitae enim rutrum aliquam. Donec justo nibh, malesuada vitae felis eu, porta eleifend erat.</p>
        <p>Proin ut pellentesque nibh. Nam vel massa placerat lectus vestibulum tempus. Aenean ac tempus lorem. Suspendisse vehicula blandit nibh sed suscipit. Praesent sed rutrum libero. Phasellus eleifend arcu massa. In a quam elementum, lacinia nibh ut, congue mi. Pellentesque vel lectus vel erat lacinia auctor. Nullam sagittis arcu feugiat leo condimentum euismod. Ut sagittis eu ligula vitae viverra.</p>
      </section>

      <!-- Lábléc -->

      <footer>
        <p>&copy; Webtervezés gyakorlat</p>
      </footer>
    </main>
  </body>
</html>