<?php

$pessoa = ["Samuel", 22, "Programador", "Masculino"];

print_r($pessoa);
echo "<br>";

list($nome, $idade, $profissao, $sexo) = $pessoa;

echo $nome . "<br>";
echo $idade . "<br>";
echo $profissao . "<br>";
echo $sexo . "<br>";