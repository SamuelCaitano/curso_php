<?php

abstract class Teste{

    public static function testandoClasse(){

    echo "Este método é de uma classe abstrata <br>";

    }

    abstract public function testeAbs();

}

Teste::testandoClasse();

class Nova extends Teste {

    public function testeAbs() {

        echo "Teste método abstrato <br>";

    }
}

$teste = new Nova;

$teste->testeAbs();