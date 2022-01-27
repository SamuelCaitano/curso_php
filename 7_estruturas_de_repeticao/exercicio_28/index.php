<?php

$i = 4;

while($i <= 30){
    echo $i . "<br>";
    
    if($i === 24){ 
        echo "Terminando o loop";
        break;
    }

    $i += 2;
}