<?php
    $n = readline();

    while ($n % 2 == 0) {
      $n /= 2;
   }
   if ($n > 1) {
      echo "NO";
   } else {
      echo "YES";
   }
?>