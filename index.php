<!DOCTYPE html>
<html lang=fr dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Pathway+Gothic+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@500;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/020b73ee32.js" crossorigin="anonymous"></script>
    <link rel="icon" href="public/favicon.ico" type="image/icon type">
    <title>bienvenue</title>
  </head>
  <body>
    <header>
      <nav>
      <h1>Bienvenue</h1>
        <ul>
          <li><a href="cv.php">à propos</a></li>
          <li><a href="https://github.com/santanamrl" target="_blank">github</a></li>
          <li><a href="https://www.linkedin.com/in/marilou-santana-914810230/" target="_blank">linkedin</a></li>
        </ul>
      </nav>
    </header>
    <!-- début du carousel -->
    <div class='carousel'>
        <div class='slides'>
            <!-- boutons radio -->
            <input type="radio" name="radio-btn" id="radio1">
            <input type="radio" name="radio-btn" id="radio2">
            <input type="radio" name="radio-btn" id="radio3">
            <!-- images du carousel -->
            <div class="slide first">
              <img src="public/workingOnIt.png" alt="">
            </div>
            <div class="slide">
              <img src="public/workingOnIt.png" alt="">
            </div>
            <div class="slide">
              <img src="public/workingOnIt.png" alt="">
            </div>
            <!-- navigation automatique -->
            <div class="autoNavigation">
              <div class="autoBtn1"></div>
              <div class="autoBtn2"></div>
              <div class="autoBtn3"></div>
        </div>
    </div>
    <!-- navigation manuelle -->
    <div class="manualNav">
      <label for="radio1" class="manualBtn"></label>
      <label for="radio2" class="manualBtn"></label>
      <label for="radio3" class="manualBtn"></label>
    </div>
</div>
<!-- javascript permettant le sliding automatique -->
<script type="text/javascript">
    var counter = 1;
    setInterval(function(){
      document.getElementById('radio' + counter).checked = true;
      counter++
      if (counter > 3) {
        counter = 1;
      }
    }, 5000);
</script>
<!-- fin javascript -->
<div class="phoneView">
  <img src="public/pitosAura.png" alt="">
</div>
<div id="infos">
  <p> Marilou Santana
    <br> 21 ans | Etudiante en PHP et MYSQL by day.
    <br> Character Designer by night.
    <br> Nice, FRANCE </p>
</div>
<footer></footer>
  </body>
</html>
