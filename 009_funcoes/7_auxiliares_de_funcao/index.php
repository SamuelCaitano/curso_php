<?php

function soma($a, $b, $c, $d){

    print_r(func_get_args());

    echo "<br>";
 
    echo func_num_args() . "<br>";

    return $a + $b + $c + $d;
}

soma(4, 5, 6, 2);
 