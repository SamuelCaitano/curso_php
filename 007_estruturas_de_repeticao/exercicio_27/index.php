<?php

$dados = ["Olá", 23, true, "Tudo bem?", 14.3, "Isso é uma string", "Essa também é uma string."];

$cont = count($dados);
$i = 0;

while ($i < $cont){
    if (is_string($dados[$i])) {
        echo "$dados[$i] <br>"; 
    } 
    $i++;
}