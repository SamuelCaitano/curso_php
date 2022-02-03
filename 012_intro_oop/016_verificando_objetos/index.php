<?php

class Humano{
    public function falar() {
        echo "Olá";
    }
}

$samuel = new Humano;

$teste = 10; // variável

if(is_object($samuel)){
    echo "É um objeto <br>";
} else {
    echo "Não é um objeto <br>";
}

if(is_object($teste)){
    echo "É um objeto <br>";
} else {
    echo "Não é um objeto <br>";
}

echo get_class($samuel) . "<br>";

if(method_exists($samuel, "falar")){
    echo "O método existe <br>";
} else {
    echo "O método não existe <br>";
}

if(method_exists($samuel, "andar")){
    echo "O método existe <br>";
} else {
    echo "O método não existe <br>";
}