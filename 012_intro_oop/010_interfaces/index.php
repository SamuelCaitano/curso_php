<?php

use Humano as GlobalHumano;

interface Caracteristicas{
    
    const nome = "Samuel"; 

    public function falar();

}

class Humano implements Caracteristicas{

    public $idade = 22;

    public function falar()
    {
        echo "Olá, meu nome e " . self::nome; 
    }

}

$samuel = new GlobalHumano;

$samuel->falar();