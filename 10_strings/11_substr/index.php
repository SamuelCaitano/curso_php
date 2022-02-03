<?php

$str = "Esta é a minha string";

// substr(string, indice inicial, comprimento da palavra)
$minha = substr($str, 10, 5);

echo $str . "<br>";
echo $minha . "<br>";

// se omitir o terceiro parâmetro, ele irá pegar o restante da string
$novaStr = substr($str, 5);

echo $novaStr . "<br>";

// comprimento negativo, ira remover do ultimo indice
$novaStr2 = substr($str, 0, -7);

echo $novaStr2 . "<br>";