<?php

$a = [];

for($i = 1; $i <= 15; $i++){
      
    array_push($a, $i); 

}

print_r($a);

echo "<hr>";

function arrayMaior($array){
    $arrayRetorno = [];

    for($j = 1; $j < count($array); $j++) {

        if($array[$j] > 7){
            array_push($arrayRetorno, $array[$j]);
        }

    }
    return $arrayRetorno;
}

$novoArray = arrayMaior($a);

print_r($novoArray);