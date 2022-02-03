<?php

$arr = [];


// Adicionando valores
print_r($arr);
echo "<br>";

$arr[0] = "Samuel";

print_r($arr);
echo "<br>";

$arr[1] = "Caitano";

print_r($arr);
echo "<br>";

$arr[2] = $arr[0] . " " . $arr[1];

print_r($arr);
echo "<br>";

// Modificar valores
$arr[2] = $arr[2] . " da Silva";

print_r($arr);
echo "<br>";

// Array associativo
$arrayAssoc = [];

print_r($arrayAssoc);
echo "<br>";

$arrayAssoc["carro"] = "Gol G5";

print_r($arrayAssoc);
echo "<br>";

$arrayAssoc["celular"] = "Samsung s9+";

print_r($arrayAssoc);
echo "<br>";

$arrayAssoc["carro"] = "Civic G10";

print_r($arrayAssoc);
echo "<br>";