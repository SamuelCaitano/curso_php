<?php

/* os parâmetros dessa função espera o retorno de apenas números
 para realizar a operação de soma, são esperado os valores
 dos tipos INT, FLOAT e STRING sendo eles números; */
function soma($a, $b) {
    echo $a + $b;
    echo "<br>";
}

/* os parâmetros dessa função espera o retorno de qualquer tipo de dado
já que será realizado apenas a concatenação de ambos , são esperado os valores
 dos tipos INT, FLOAT e STRING; */
function concatenacao($nome, $sobrenome) {
    echo $nome, " ", $sobrenome;
    echo "<br>";
}

soma(2, 2); // int
soma(3.8, 4.2); // float
soma("8", "8"); // string com números

echo "<hr>";

concatenacao("Samuel", "Caitano"); // string com letras
concatenacao("2022", "Caitano"); // string com números e letras
concatenacao(2023, "Caitano"); // int e string com letras