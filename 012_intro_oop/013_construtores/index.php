<?php

class Car{

    public $marca;
    public $modelo;
    public $cor;

    function __construct($marca, $modelo, $cor)
    {
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->cor = $cor;
    }
}

$civic = new Car("Honda", "Civic", "preto");

echo "O carro é da marca $civic->marca, modelo $civic->modelo na cor $civic->cor";