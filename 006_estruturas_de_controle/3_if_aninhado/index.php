<?php

$idade = 22;
$nomeLista = true;
$roupa = "short";
$acessorios = "bone";

$msg1 = "liberado a entrada ";
$msg2 = "entrada não liberada ";

if ($idade >= 18) { // true
    if ($nomeLista == true) { // true
        if ($roupa != "short" && $acessorios != "bone") { // false

        } else { // true
            echo $msg1;
        }
    } else { // false
        echo $msg2;
    }
}
