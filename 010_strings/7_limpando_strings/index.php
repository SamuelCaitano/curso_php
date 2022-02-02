<?php

// a função trim(), ajuda a evitar o salvamento de espaços desnecessários no banco de dados;

$str = "   Samuel  "; // 11 caracteres

echo strlen($str) . "<br>";

echo "Esta é a string 1: $str. <br>";

$str = trim($str); // 6 caracteres

echo strlen($str) . "<br>";

echo "Esta é a string 1: $str. <br>";