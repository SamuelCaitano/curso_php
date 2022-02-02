<?php

$tabuada  = [2, 3]; // array com 2 indices
$i = 0;
$j = 1;

while ($i < count($tabuada)){
    while ($j <= 10) {

        echo "$tabuada[$i] x $j = " . $valor = $tabuada[$i] * $j ."<br>";
        $j++;

        // esse if irá imprimir a mensagem e pular pra fora do while
        if ($valor == 12){
            echo "Terminando o loop while interno <br>";
            break;
        }
    } 
    $j = 1;
    $i++;  
}

echo "Saiu do loop while <br>"; 