<?php

    $a = 'string'; // a váriavel $a é uma string
    $b = 11.1;
    $c = 12.8;

    $res = is_float($b);
    
    if($res == true){
        echo $b, ' é um número float';
    }

    echo '<br>';
    if(is_float($c)){
        echo $c, ' é um número float';
    }

?>