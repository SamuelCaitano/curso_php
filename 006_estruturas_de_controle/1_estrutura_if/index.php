<?php

// condição verdadeira
if (5 > 2) {
    echo "Deu certo! Entrou no if 1 <br>";
}

// condição falsa
if (2 >= 5) {
    echo "Não vai entrar no if, porque ddeu false! <br>";
}

// utilizando operadores lógicos
if ((10 === 10) && (9 > 3)) {
    echo "Deu certo! Entrou no if 2 <br>";
}

// variáveis
$a = 15;
$b = 7;

$c =  "Deu certo! Entrou no if 3 <br>";

if ($a >= $b) {
    echo $c;
}
