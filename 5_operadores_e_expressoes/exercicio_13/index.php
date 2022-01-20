<?php

$num = [10, 5, 7, 2468]; 

for($i = 0; $i < count($num); $i++) {

    if($num[$i] % 2 == 0){
        echo $num[$i] . " é PAR <br>";
    } else {
        echo $num[$i] . " é IMPAR <br>";
    }
}