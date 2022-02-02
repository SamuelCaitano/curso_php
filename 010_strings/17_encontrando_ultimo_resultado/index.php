<?php

$str = "PROCURANDO A PALAVRA TESTE, NESTA STRINS DE TESTE";

// transformamos a frase de maiúsculas para minúsculas
$str = strtolower($str);

// procuramos a ultima paravra da nossa ocorrencia
$palavra = strrpos($str, "teste");

echo "$palavra <br>";

// procuramos a primeira paravra da nossa ocorrencia
$palavra2 = strpos($str, "teste");

echo "$palavra2 <br>";

if(strrpos($str, "PHP") === false){
    echo "A palavra PHP não foi encontrada <br>";
}


$word = substr($str, strpos($str, "teste"), 5);

echo "$word <br>"; // retorna a palavra = teste;