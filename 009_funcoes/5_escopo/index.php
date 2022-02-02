<?php

$a = 10;
$b = 2;

function testeEscopoA(){
    $a = 5;
    
    $a++; // incremento da váriavel A
    echo "escopo LOCAL de A: $a <br>";
    
}

function testeEscopoB(){
    global $b;
    $b = 4;

    echo "escopo GLOBAL na função de B: $b <br>";

}

function testeEscopoC(){
    static $c = 0;
    global $c;
    $c++;

    echo "escopo GLOBAL STATIC  na função de C: $c <br>";

}

testeEscopoA();

echo "escopo GLOBAL de A: $a <br>";

echo "<hr>";

testeEscopoB();

echo "escopo GLOBAL de B: $b <br>";

echo "<hr>";

testeEscopoC();
testeEscopoC();

echo "escopo GLOBAL STATIC de C: $c <br>";