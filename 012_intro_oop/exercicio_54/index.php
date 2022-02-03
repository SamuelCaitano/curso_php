<?php

class Person{
    public $name;
    public $yearsOld;

    function speak($name, $yearsOld){
        echo "Hi, my name's $name, I'm $yearsOld years old <br>";
    }

    function walk($distance){
        echo "I'm Walking in my neighborhood for $distance miles <br>";
    }
}

$samuel = new Person;
$matheus = new Person;

$samuel->name = "Samuel";
$samuel->yearsOld = 22;

$matheus->name = "Matheus";
$matheus->yearsOld = 29;


$samuel->speak($samuel->name, $samuel->yearsOld);

$matheus->speak($matheus->name, $matheus->yearsOld);

$samuel->walk(1);

$matheus->walk(3);