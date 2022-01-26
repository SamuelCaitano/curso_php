<?php

$idade = [10, 19, 25, 17, 21];

$maioridade = 18;
$msg1 = "Maior de idade";
$msg2 = "Menor de idade";

for ($i = 0; $i < count($idade); $i++) {
    if ($idade[$i] >= $maioridade) {
        echo " $idade[$i] = $msg1  <br>";
    } else {
        echo " $idade[$i] = $msg2  <br>";
    }
}