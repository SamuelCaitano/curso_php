<?php

// sort() = ordena em ordem CRESCENTE letras e numeros
// rsort() = ordena em ordem DECRESCENTE letras e numeros

$arr = ['Maria', 'Matheus', 'Cristina', 'Samuel', 'Roberto'];

sort($arr);

print_r($arr);
echo "<br>";

rsort($arr);

print_r($arr);
echo "<br>";