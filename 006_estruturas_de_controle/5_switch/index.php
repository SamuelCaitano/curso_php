<?php

$a = 2;

switch ($a) {
    case 1:
        echo "Entrou no case 1";
        break;
    case 2:
        case2(); // chama a função case2
        break;
    default:
        echo "A não é igual a nenhum dos valores mencionados"; 
}

function case2(){
    echo "Entrou no case 2";
}