<?php
if (isset($_POST['message'])) {
  $message = "Ce message vous a été envoyé via la page contact du site.
  Nom : " . $_POST['nom'] . "
  Email : " . $_POST['email'] . "
  Message : " . $_POST['message'];
  $retour = mail('santanamrl.06@gmail.com', $_POST['sujet'], $message, 'From:contact@chiffonartwork.com' . '\r\n' . 'Reply-to:' . $_POST['email']);
    /* if ($retour) {
      echo "<p> l'e-mail a bien été envoyé.</p>";
    } */
}
?>
