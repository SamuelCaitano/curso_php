<?php

$arr = [
    'nome' => 'Samuel',
    'idade' => 22, 
    'sexo' => 'Masculino' 
];

$arrayChaves =  array_keys($arr);

var_dump($arrayChaves);

$arrayValues = array_values($arr);

var_dump($arrayValues);