<?php

$saudacoes = ["Bom dia,", "Boa Tarde,", "Boa Noite,"];
$sexo = ["M", "F"];
$nome = ["Samuel", "Raquel"];
$sobrenome = ["Silva", "Maria"];


for ($i = 0; $i < count($nome); $i++) {
    echo $saudacoes[$i];
    if ($sexo[$i] == "M") {
        echo " Senhor";
    } else {
        echo " Senhora";
    };
    echo " $nome[$i] $sobrenome[$i] <br>";
}
