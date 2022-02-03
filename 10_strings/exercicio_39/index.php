<?php

$arr = [
    'porta' => 100,
    'vidro' => 200,
    'alinhamento' => 150,
    'retrovisor' => 25
];

function itensCaros($arr){

    $arrItensCaros = [];

    foreach($arr as $item => $preco){

        if($preco > 100){
            array_push($arrItensCaros, $item);
        }
    }
    return $arrItensCaros;
}

$novoArray = itensCaros($arr);

echo var_dump($novoArray);