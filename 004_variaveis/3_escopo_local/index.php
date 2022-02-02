<?php

// o escopo global NÃO altera variáveis do escopo local
// o escopo local de funções diferentes NÃO altera variáveis umas das outras
$x = 5;

function teste1() {
    $x = 10;

    echo "$x escopo local 1<br>";
}

function teste2() {
    $x = 15;

    echo "$x escopo local 2 <br>";
}

echo "$x escopo global <br>";
teste1();
teste2();