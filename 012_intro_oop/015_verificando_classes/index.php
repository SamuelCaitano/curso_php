<?php

class Humano {

    public $idade;
    public $nome;
    public $profissao;

    public function falar() {}

    public function andar() {}

    // os metodos private não será encontrado pela função get_class_methods
    private function sorrir() {}
}

if( class_exists("Humano")) {
    echo "A classe existe <br>";
}

if( class_exists("Cachorro")) {
    echo "A classe existe <br>";
} else {
    echo "A classe não existe <br>";
}

echo "<br>";

print_r(get_class_vars("Humano"));

echo "<br> <br>";

print_r(get_class_methods("Humano")); 
