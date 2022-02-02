<?php

$str = "Samuel";
$num = 22; 

if(is_string($str)){
    echo "Óla $str <br>";
    echo " essa váriavel é uma string <br>";
}

if(is_string($num) == false){
    echo "a váriavel num NÃO é uma string";
}

?>