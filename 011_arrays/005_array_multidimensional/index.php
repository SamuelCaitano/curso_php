<?php

$arr = [
    ['1º elemento do 1º array', '2º elemento do 1º array', '3º elemento do 1º array'],
    ['1º elemento do 2º array', '2º elemento do 2º array', '3º elemento do 2º array']
];

print_r($arr);
echo "<br>";

echo $arr[0][0] . "<br>";
echo $arr[1][1] . "<br>";

echo "<hr>";

echo count($arr) . "<br>";
echo count($arr[0]) . "<br>";