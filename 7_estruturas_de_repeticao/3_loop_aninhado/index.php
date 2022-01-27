<?php

  $i = 1;
 
  while($i <= 5) {

    echo "Loop <b>externo</b> $i <br>";

    // segundo contador
    $j = 1;
 
    while($j <= 5) {

      echo "Loop interno $j <br>"; 
      $j++;
    }

    $i++;
  }