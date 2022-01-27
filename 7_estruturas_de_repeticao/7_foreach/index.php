<?php

$nomes = ["Suelen", "Jessica", "Camila", "Raquel", "Samuel", "Ravel"];

foreach($nomes as $nome){
    echo " O nome do índice atual é $nome <br>";

    if($nome === "Samuel"){
        echo "Encontrei o Samuel <br>";
    }
}