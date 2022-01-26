<?php

$dados = [14, "Samuel", true, 3.14];

echo "<b>Tipos de dados:</b> <br>";

for ($i = 0; $i < count($dados); $i++){
    echo gettype($dados[$i]) . "<br>";
}

echo "<hr>";

for ($i = 0; $i < count($dados); $i++){
    if (is_int($dados[$i])){
        echo "<b>$dados[$i] é do tipo int </b> <br>";
    } else {
        echo "$dados[$i] é de outro tipo <br>";
    } 
}