<?php

$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9];

// //  irá pegar apartir do 2 indice do array, 2 indices
$slice1 = array_slice($arr, 2, 2);

print_r($slice1);
echo "<br>";

//  irá pegar apartir do 2 indice do array ate o ultimo
$slice2 = array_slice($arr, 2);

print_r($slice2);
echo "<br>";

$slice3 = array_slice($arr, 4, -3);

print_r($slice3);
echo "<br>";

var_dump($arr);