<?php

$a = 3; 
$b = 2; 
$c = 5;

echo $a + $b * $c; // resultado 13
echo "<br>";
echo ($a + $b) * $c; // resultado 25
echo "<br>";


echo $a + $a * $b / $b - $a;
/*  3 + (3 * 2) / 2 - 3     realizamos a multiplicação
    3 + (6 / 2) - 3         realizamos a divisão
    (3 + 3) - 3             realizamos a adição
    6 - 3                   realizamos a subtração
    = 3
*/