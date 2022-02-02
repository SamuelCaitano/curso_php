<?php

$a = 10;
$b =& $a;

echo $a, "<br>"; 
echo $b, "<br>"; 

$b = 20;

echo "Variável após ref <br>"; 
echo $a, "<br>" ; 
echo $b, "<br>"; 

echo "<br>";

$nome = "Samuel";
$usuario =& $nome;

echo $nome, "<br>" ; 
echo $usuario, "<br>";

$usuario = "Caitano";

echo "Variável após ref 2 <br>"; 
echo $nome, "<br>" ; 
echo $usuario, "<br>";

