<?php

$a = (int) "teste";
echo $a . "<br>"; // retorna 0

$b = (int) 12.9;
echo $b . "<br>"; // retorna 12

$c = (int) true;
echo $c . "<br>"; // retorna 1

$d = (int) false;
echo $d . "<br>"; // retorna 0

$e = (int) [1, 2, 3];
echo $e . "<br>"; // retorna 1