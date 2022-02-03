<?php

$arr = ['Hilux', 'Amarok', 'Ranger', 'RAM'];

print_r($arr);
echo "<br>";

if(in_array("Amarok", $arr)){
    echo "Item encontrado! <br>";
} else{
    echo "Item não encontrado! <br>";
}

if(in_array("Gol", $arr)){
    echo "Item encontrado! <br>";
} else{
    echo "Item não encontrado! <br>";
}
 