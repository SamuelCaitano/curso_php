<?php

$a = "aaa"; // variável global;

echo "[ $a ] variável global 1 <br>";

function funcao1() {
    $a = "bbb"; // variável local do escopo da funcao;
    echo "[ $a ] variável local 1 <br>";
}

function funcao2() {
    global $a; // acessando a variável global dentro do escopo local da funcao;
    $a = "ccc";
    echo "[ $a ] variável local 2 (alteramos o valor da variavel global 1)<br>";
}

funcao1();
funcao2();
echo "[ $a ] variável global 1 <br>";