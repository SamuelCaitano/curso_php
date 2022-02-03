<?php

$marca = "Volkswagem";
$modelo = "Gol G5";
$anoFab  = 2012;
$motor = "1.0";
$combustivel = 'Alcool/Gasolina';
$arCondicionado = true;

$carro = compact('marca', 'modelo', 'anoFab', 'motor', 'combustivel', 'arCondicionado');

print_r($carro);

foreach($carro as $itens => $value){
    echo "$itens : $value <br>";
}