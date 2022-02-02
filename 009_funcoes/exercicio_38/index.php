<?php

$lista = ["Arroz", "Feijão", "Macarrão", "Café", "Trigo"];

function listaParaString($arr) {
    $str = "<h1>Você levou estes itens do mercado: ";

    for($i = 0; $i < count($arr); $i++){

        if($i + 1 == count($arr)){
            $str .= "$arr[$i]. ";
        } else {
            $str .= "$arr[$i], ";
        }
    }
    return $str;
}

echo listaParaString($lista); 