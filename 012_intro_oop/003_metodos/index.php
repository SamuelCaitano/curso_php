<?php

use Automovel as GlobalAutomovel;

class Automovel{

    function ligar(){
        echo "O carro foi ligado <br>";
    }
    
    function desligar(){
        echo "O carro foi desligado <br>";
    }
}

$carro = new GlobalAutomovel;

$carro->ligar();
$carro->desligar();
