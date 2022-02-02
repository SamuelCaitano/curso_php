<?php

// para que a operação sejá verdadeira, as duas condições devem serem true

$idade1 = 22;
$nomeLista1 = true;
$nome1 = "Samuel";

$idade2 = 19;
$nomeLista2 = false;
$acompanhante = true;
$nome2 = "Matheus";

if ($idade1 >= 18 && $nomeLista1 == true) { // retorna true
    echo "$nome1 pode entrar na festa <br>";
}

if ($idade2 >= 18 && $nomeLista2 == true) { // retorna false
    echo "$nome2 pode entrar na festa";
} else { // entra nesse else
    echo "$nome2 não pode entrar na festa, não é de maior ou não tem o nome na lista <br>";
}

if (($idade2 >= 18 && $acompanhante == true) && ($idade1 >= 18 && $nomeLista1 == true)) { // retorna false
    echo "$nome1 é o convidado e $nome2 é o acompanhante, eles podem entrar na festa";
} 
