<?php

$a = 3;
$b = 4;

// retorna true
if($a != $b){
    echo "Testando diferença 1 <br>";
}

// retorna false
if($a != 3){
    echo "Testando diferença 2 <br>";
}

// retorna false
if($a != "3"){
    echo "Testando diferença 3 <br>";
}

// retorna true
if(NULL != " "){
    echo "Testando diferença 4 <br>";
}