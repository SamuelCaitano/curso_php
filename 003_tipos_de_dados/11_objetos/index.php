<?php

class Automovel {
    
    // função para ligar o carro
    function ligar(){
        $ligado = true;
        echo "O carro foi ligado";
        echo "<br>";
    }
    // função para desligar o carro
    function desligar(){
        $ligado = false;
        echo "O carro foi desligado";
        echo "<br>";
    }
}

$carro = new Automovel;
$carro->marca = "BMW";

$ligado = false;

// verificamos se o carro está ligado
if($ligado == false){
    echo "O carro $carro->marca está desligado";
    echo "<br>";
} else {
    echo "O carro está ligado";
    echo "<br>";
}
 

$carro->ligar(); // chamamos a função para ligar o carro
$carro->desligar(); // chamamos a função para desligar o carro 

?>