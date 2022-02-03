<?php

// array multidimensional
$arr = [
    ["1º do 1º", "2º do 1º", "3º do 1º", "4º do 1º"],
    ["1º do 2º", "2º do 2º", "3º do 2º", "4º do 2º"],
    ["1º do 3º", "2º do 3º", "3º do 3º", "4º do 3º"]
];

// loop nop array externo
for($i = 0; $i < count($arr); $i++){

 echo "Imprimindo o array: " . ($i + 1) . "<br>";

    // loop no array interno
    for($j = 0; $j < count($arr[$i]); $j++){

        echo $arr[$i][$j] . "<br>";

    }
}