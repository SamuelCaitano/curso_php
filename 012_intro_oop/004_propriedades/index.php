<?php

class  Car {

    public $rodas;
    public $aro = 20;
    public $cor = "preto";

    function ligar(){
        echo "O carro foi ligado <br>";
    }

}

$civic = new Car;

$civic->rodas = 4;

echo $civic->cor . "<br>";

$civic->cor = "branco";

echo $civic->cor . "<br>";

$civic->ligar();