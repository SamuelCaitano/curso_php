<?php

$peso = [49, 92, 102];
$valorPorKg = 0.69;

for ($i = 0; $i < count($peso); $i++) {
    $valorTotal = " ";

    if($peso[$i] > 50) { 
        $valorTotal = $peso[$i] * $valorPorKg;
        echo "A mala pesa $peso[$i]kg, o valor do frete é de $valorTotal <br>"; 
    } else {
        $desconto = 15;

        $valorTotal = $peso[$i] * $valorPorKg ;
        $valorTotal = $valorTotal - ($valorTotal * $desconto) /100;
        echo "A mala pesa $peso[$i], com o desconto de $desconto% o valor do frete é de $valorTotal <br>";
    }
}
 