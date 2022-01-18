<?php

$num1 = 20.22;
$num2 = -11.11;

echo $num1;
echo '<br>';

$res = is_float($num1);

if($res == true){
    echo $num1, ' é float';
} else {
    echo $num1, ' não é float';
}

echo '<br>';
if(is_float($num2)){
    echo $num2, ' é float';
}

?>