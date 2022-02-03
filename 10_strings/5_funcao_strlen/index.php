<?php

// o PHP inclui na contagem, caracteres alfanúmericos, espaços em branco e acentuações

$str1 = "Esta string é muito grande";
$str2 = "Esta é pequena";

echo strlen($str1) . "<br>";
echo strlen($str2) . "<br>";

$len1 = strlen($str1);
$len2 = strlen($str2);

echo ($len1 > $len2)? "A string 1 é maior" : "A string 2 é maior";