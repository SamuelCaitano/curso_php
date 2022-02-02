<?php

  $i = 1;
 
  while($i <= 5) {

    if($i === 3){
        echo "Pulou a execução $i <br>";
        $i++;
        continue; // irá pular todas instruções abaixo
    }

    echo "Loop <b>externo</b> $i <br>";

    // segundo contador
    $j = 1;
 
    while($j <= 5) {

      echo "Loop interno $j <br>"; 
      $j++;
    }

    $i++;
  }