<?php

$data = new DateTime();

echo $data->format('d/m/y') . "<br>";

echo $data->format('d/m/Y') . "<br>";

echo $data->format('l, F, Y') . "<br>";

// data + 5 dias
$data->modify('+5 days');

echo $data->format('d/m/Y') . "<br>";

// data +20 dias
$data->modify('+20 days');

echo $data->format('d/m/Y') . "<br>";

// data -22 anos
$data->modify('-22 years');

echo $data->format('d/m/Y') . "<br>";