<?php

class Cachorro{

    function latir($nome){
        echo "$nome ésta latindo <br>";
    }

    function andar($nome){
        echo "$nome esta andando <br>";
    }
}

$bob = new Cachorro;
$scooby = new Cachorro;

$bob->latir("Bob");

$scooby->latir("Scooby");

$bob->andar("Bob");

$scooby->andar("Scooby");