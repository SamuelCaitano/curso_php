<?php

function soma($n1, $n2){
    $msgErro = "Por favor, informe um número";

    if(is_int($n1) || is_int($n2) || is_float($n1) || is_float($n2)){
        return $n1 + $n2;
    } else {
        return $msgErro;
    }    
}

echo soma(2, 2) . "<br>";

$x = soma(4, 6);

echo $x . "<br>";

$y = soma($x, 6);

echo $y . "<br>";