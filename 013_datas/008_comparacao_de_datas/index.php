<?php

$dataA = new DateTime();
$dataB = new DateTime();
$dataC = new DateTime();

$dataB->setDate(1999, 10, 23);
$dataC->setDate(2025, 10, 05);

if($dataA > $dataB){
    echo "A data A é maior que a data B <br>";
} else {
    echo "A data B é maior que a data A <br>";
}

if($dataC > $dataA){
    echo "A data C é maior que a data A <br>";
} else {
    echo "A data A é maior que a data C <br>";
}