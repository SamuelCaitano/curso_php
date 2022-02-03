<?php

use Automovel as GlobalAutomovel;
use Car as GlobalCar;

class Automovel {
    private $brand;
    private $model;
    private $motor;
    private $speedMax;
    private $ligado;

    function getLigar(){

    }

    function setLigar(){        

        if($this->ligado === true){
            echo "O carro já esta ligado <br>";
        } else {
            echo "O carro foi ligado <br>";
            $this->ligado = true;
        }
    }
}


class Car extends GlobalAutomovel {
    public $cor;
}

$civic = new GlobalCar;

echo $civic->setLigar();
echo $civic->setLigar();