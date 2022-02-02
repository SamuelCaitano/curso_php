<?php

echo "concatenação" . " " . "utilizando o ponto(.) <br><hr>";  

$nome = ["Samuel", "Raquel", "Ravel"];
$sobrenome = "Silva";
$moeda = "R$";
$saldo = [1000, 2998, 15000];
 
for($i = 0; $i < count($nome); $i++){
    // exemplo de concatenação
    echo $nome[$i] . " " . $sobrenome . " tem $moeda $saldo[$i] na conta" . "<br>";
    // é o mesmo que está abaixo
    // echo "$nome[$i] $sobrenome tem $moeda $saldo[$i] na conta <br>";
}