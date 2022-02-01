<?php

function verificaNum($num){

    if(is_int($num)){

        if($num % 2 == 0){
            echo "O número $num é PAR <br>";
        } else {
            echo "O número $num é IMPAR <br>";
        }

     }

}

verificaNum(10);
verificaNum(15);
verificaNum(15556);
