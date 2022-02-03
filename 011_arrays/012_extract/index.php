<?php

$arr = [
    'cor' => 'vermelho',
    'forma' => 'quadrado',
    'material' => 'ferro'
];

extract($arr);

echo "$cor <br>";
echo "$forma <br>";
echo "$material <br>";

$nome = "Matheus";

$pessoa = [
    'nome' => 'Samuel'
];

echo "valor na variável nome antes do extract() = $nome <br>";

extract($pessoa);

echo "valor na variável nome depois do extract() = $nome <br>";