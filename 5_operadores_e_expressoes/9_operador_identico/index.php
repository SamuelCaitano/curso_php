<?php

// O operador de idêntico valida o valor e o tipo de dado também;

// igualdade, retornara true
if (5 == "5") {
    echo "Ex. 1: 5 é 5 <br>";
}

// idêntico, retornara false
if (5 === "5") {
    echo "Ex. 2: 5 é 5 <br>";
}

// idêntico, retornara true
if (5 === 5) {
    echo "Ex. 3: 5 é 5 <br>";
}