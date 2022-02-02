<?php

$num = 7;

// verificamos se o valor da váriavel $num é um inteiro
if(is_int($num)) {
    echo $num, ' é um número inteiro';

    // verificamos se o valor da váriavel $num é par ou impar
    if($num % 2 == 0){
        echo ' par';
    } else {
        echo ' impar';
    }
} 

?>