<?php

$nome = "Samuel";
$usuario =  "Samuel";
$nomeCompleto = "Samuel Caitano";

if ($nome == $usuario) {
    echo "Comparação verdadeira";
}

// não será apresentado, pois, a condição retornara falso
if ($nome == $nomeCompleto){
    echo "Comparação verdadeira";
}