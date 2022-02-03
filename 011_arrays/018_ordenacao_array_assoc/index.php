<?php
$arr = [
    'Maria' => 12,
    'Matheus' => 29,
    'Cristina' => 55,
    'Samuel' => 22, 
];

// ordena pelo valor em ordem crescente
asort($arr);

print_r($arr);
echo "<br>";
 
// ordena pelo valor em ordem decrescente
arsort($arr);

print_r($arr);
echo "<br>";

// ordena pela chave em ordem crescente
ksort($arr);

print_r($arr);
echo "<br>";

// ordena pela chave em ordem decrescente
krsort($arr);

print_r($arr);
echo "<br>";
