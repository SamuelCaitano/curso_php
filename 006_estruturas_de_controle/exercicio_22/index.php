<?php

$idade = [10, 19, 25, 17, 21];

$maioridade = 18;
$msg = "Maior de idade";

for ($i = 0; $i < count($idade); $i++) {
    if ($idade[$i] >= $maioridade) {
        echo " $idade[$i] = $msg  <br>";
    }
}
