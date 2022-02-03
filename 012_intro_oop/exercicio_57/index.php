<?php

use Cachorro as GlobalCachorro;

class Cachorro{
    public $nome;
    public $dono;

    public function __construct($nome, $dono)
    {
        $this->nome = $nome;
        $this->dono = $dono;      
    }

    public function nomeCachorro(){
        echo "O nome do cachorro é $this->nome <br>";
    }

    public function nomeDono(){
        echo "O nome do dono é $this->dono <br>";
    }
}

$scooby = new GlobalCachorro("Scooby", "Samuel"); 

$scooby->nomeCachorro();
$scooby->nomeDono();