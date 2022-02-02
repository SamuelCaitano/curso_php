<?php

// irá quebrar a string onde ha um espaço
$frase = "Testando o explode com espaço";

$fraseArray = explode(" ", $frase);

var_dump($fraseArray);
echo "<br>";

#=======================================#

// irá quebra a string onde há a vírgula
$frase = "Testando o explode com, vírgula";

$fraseArray2 = explode(",", $frase);

var_dump($fraseArray2);
echo "<br>";

#=======================================#

$frase2 = "Carro, Avião, Barco, Navio";

// irá quebra a string onde há a vírgula
$fraseArray3 = explode(",", $frase2);

var_dump($fraseArray3);
echo "<br>";

for ($i = 0; $i < count($fraseArray3); $i++) {

    echo "$fraseArray3[$i] <br>";

}
