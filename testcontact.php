<?php
$emailFormat = '#[a-z0-9]{1,}[\-\_\.a-z0-9]{0,}@[a-z]{2,}[\-\_\.a-z0-9]{0,}\.[a-z]{2,6}$#';
$contentFormat = '#^[a-zA-ZáàâäãåçéèêëíìîïñóòôöõúùûüýÿæœÁÀÂÄÃÅÇÉÈÊËÍÌÎÏÑÓÒÔÖÕÚÙÛÜÝŸÆŒ]{5,500}$#';
$nameFormat =  '#^[a-zA-ZáàâäãåçéèêëíìîïñóòôöõúùûüýÿæœÁÀÂÄÃÅÇÉÈÊËÍÌÎÏÑÓÒÔÖÕÚÙÛÜÝŸÆŒ]{5,500}$#';
if (isset($_POST['message'])) {
  if (isset($_POST['candy']) && empty($_POST['candy'])) {
  if (!preg_match($emailFormat, $_POST['email'])) {
    echo "<p> désolée, cet email n'est pas conforme. </p>";
    return;
  } if (!preg_match($contentFormat, $_POST['message'])) {
    echo "<p> attention, certains des caractères utilisés dans votre message ne sont pas autorisés. </p>";
    return;
  } if (!preg_match($nameFormat, $_POST['nom'])) {
    echo "<p> attention, certains des caractères utilisés dans votre nom ne sont pas autorisés. </p>";
  } else {
  $message = "Ce message vous a été envoyé via la page contact du site.
  Nom : " . $_POST['nom'] . "
  Email : " . $_POST['email'] . "
  Message : " . $_POST['message'];
  $retour = mail('santanamrl.06@gmail.com', $_POST['sujet'], $message, 'From:contact@chiffonartwork.com' . '\r\n' . 'Reply-to:' . $_POST['email']);
  if ($retour) {
      echo "<p> l'e-mail a bien été envoyé.</p>";
    }
  }
}
}
