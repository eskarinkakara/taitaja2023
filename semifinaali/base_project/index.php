<!DOCTYPE html>
<html lang="fi">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.7.2/css/all.min.css"
    />
    <link rel="stylesheet" href="style.css" />
    <link rel="shortcut icon" href="../assets/logo/favicon.png" type="image/x-icon">
    <title>Weather Oy</title>
  </head>
  <body>
    <header>
      <div class="row">
        <div class="col">
          <img src="../assets/logo/Logo light.png" alt="Weather Oy logo" />
        </div>
        <div class="col">
          <nav>
            <ul>
              <li><a href="login.php" class="btn secondary">Kirjaudu</a></li>
            </ul>
          </nav>
        </div>
      </div>
    </header>
  <?php
  session_start();
  if (!isset($_SESSION['user']) or isset($_GET['etusivu'])) {
    
  ?>
    <main>
      <section>
        <div class="row">
          <div class="col">
            <h1>Tervetuloa, kirjaudu sisälle nähdäksesi säätiedot</h1>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc
              dignissim lacinia justo id molestie. Nulla facilisi. Duis eu enim
              et augue consequat rhoncus.
            </p>
            <a href="login.php" class="btn primary">Kirjaudu</a>
          </div>
          <div class="col">
            <img src="../assets/img/image.png" alt="kuvakaappaus sääpalvelusta" width="100%" />
            <!-- Lisä tänne sun kuvakaapaus sääpalvelusta -->
          </div>

          <!-- HUOM! säätietojen ikoonit Font-Awesome v5: 

<i class="fa fa-cloud-rain"></i>
<i class="fa fa-snowflake"></i>
<i class="fa fa-temperature-low"></i>
<i class="fa fa-temperature-high"></i> 
-->
        </div>
      </section>
    </main>
    <?php
  } else { ?>
  <h1>Kuopio</h1>
  <p>Säätiedot 2.-8.1.2023</p>
  <h1 id="weather"></h1>
  <?php } ?>
    <footer>
      <p>@copy Taitaja 2023</p>
    </footer>
  </body>
</html>
<script src="script.js"></script>