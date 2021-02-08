<?php
  $key = !empty($_GET['key']) ? $_GET['key'] : "login";
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>United Aice</title>
    <link rel="stylesheet" href="pc.css">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
  </head>
  <body class="background">
    <nav class="navigator">
      <div class="nav-title">
        Aice
      </div>
      <div class="nav-menu">
        <ul>
          <li><a href="index.php?key=login" class="link-menu">Log in</a></li>
          <li><a href="index.php?key=daftar" class="link-menu">Daftar</a></li>
        </ul>
      </div>
    </nav>

    <section class="sec-content">
        <?php
          switch ($key) {
            case 'login':
              include 'login.php';
              break;
            case 'daftar':
              include 'daftar.php';
              break;
            case 'masuk':
              include 'masuk.php';
              break;
            case 'sekolah':
              include 'sekolah.php';
              break;
            case 'materi':
              include 'materi.php';
              break;
            default:
              include 'login.php';
              break;
          }
        ?>

    </section>

    <footer class="foot-note">
      <div class="nav-title">
        &copy; 2020-2021 by <b>Jeremia Susanto</b>
      </div>
    </footer>
  </body>
</html>
