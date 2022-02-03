<?php

$arr = range(10, 30);


for($i = 0; $i < count($arr); $i++){ 

    if($arr[$i] >= 20){
        echo $arr[$i] + 6 . " é um número grande<br>";
    } else{
        echo $arr[$i] + 6 . "<br>";
    }
    
}