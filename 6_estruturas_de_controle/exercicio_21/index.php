<?php

$a = 5;
$b = 2;
$nome = ["Matheus", "Samuel"]; 
$c = 12;
$d = (int) "11"; // cast
 
// true
if ($a > $b) {
   echo "Sim, $a é maior de $b <br>";
}
 
// true
if ($nome[0] != $nome[1]) {
    echo "$nome[0] e $nome[1] são nomes diferentes";
}

// false
if ($c <= $d) {
    echo "Não irá entrar no if, porque a condição é false";
}