<!DOCTYPE html>
<html lang=fr dir='ltr'>
  <head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <link rel='stylesheet' href='public/style.css'>
    <link rel='preconnect' href='https://fonts.googleapis.com'>
    <link rel='preconnect' href='https://fonts.gstatic.com' crossorigin>
    <link href='https://fonts.googleapis.com/css2?family=Pathway+Gothic+One&display=swap' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css2?family=Playfair+Display:wght@500;700&display=swap' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap' rel='stylesheet'>
    <script src='https://kit.fontawesome.com/020b73ee32.js' crossorigin='anonymous'></script>
    <link rel="icon" href="public/favicon.ico" type="image/icon type">
    <title>contact</title>
  </head>
  <body>
    <header>
      <nav>
      <h1>CONTACT</h1>
        <ul>
          <li><a href='cv.php'>à propos</a></li>
          <li><a href='https://github.com/santanamrl' target='_blank'>github</a></li>
          <li><a href='https://www.linkedin.com/in/marilou-santana-914810230/' target='_blank'>linkedin</a></li>
          <li><a href='index.php'>accueil</a></li>
        </ul>
      </nav>
    </header>
  <section id='contact'>
        <h5> Où me trouver</h5>
        <p><strong>Tél</strong> : 06. 23. 48. 28. 72
        <br><strong>E-mail</strong> : santanamrl.06@gmail.com
        <br><strong>Adresse</strong> : 26 rue de la Buffa, 06000 Nice, France</p>
  </section>
  <div class="contactForm">
  <h5>Ou envoyez-moi un message</h5>
  <form method='post'>
    <input type='text' name='nom' placeholder='Nom' required>
    <input type='email' name='email' placeholder='Email' required>
    <input type='text' name='sujet' placeholder='Sujet' required>
    <textarea name='message' placeholder='Message' required></textarea>
    <input type='submit' value='Envoyer'>
    <input type="hidden" name="candy">
  </form>
  <?php
  require('testcontact.php');
  ?>
  </div>
  <footer></footer>
  </body>
  </html>
