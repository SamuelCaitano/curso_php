<?php

 $velocidade = [45, 43, 51, 60, 0];

 for($i = 0; $i  < count($velocidade); $i++){
     if ($velocidade[$i] == 0) {
         echo "$velocidade[$i] = Proibido parar ou estacionar. Multa grave <br>";
     } else if($velocidade[$i] <= 50) {
        echo "$velocidade[$i] = Dentro da velocidade permitida <br>";
     } else {
         echo "$velocidade[$i] = Acima da velocidade permitida. Multa grave <br>";
     }
 }