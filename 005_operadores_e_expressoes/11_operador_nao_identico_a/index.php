<?php
// O operador não idêntico (!==), irá verificar o valor e também o tipo de dado

$a = 1;
$b = "1";

// retorna false
if($a != $b){
    echo "A é diferente de B 1 <br>";
}

// retorna true
if($a !== $b){
    echo "A é diferente de B 2 <br>";
}