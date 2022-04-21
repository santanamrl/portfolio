<?php

function fetchWordArray($wordFile) {
    $file =fopen($wordFile, 'r');
    if ($file) {
      $randomLine = null;
      $line = null;
      $count = 0;
      while (($line = fgets($file)) !=false) {
        $count++;
        if (rand()%$count==0) {
          $randomLine = trim($line);
        }
  } if(!feof($file)) {
    fclose($file);
    return null;
  } else {
    fclose($file)
  }
}

}

 ?>
