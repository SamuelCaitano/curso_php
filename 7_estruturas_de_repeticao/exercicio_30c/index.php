<?php

$a = [];

for ($i = 10; $i <= 20; $i++) {

    array_push($a, $i);
}

print_r($a);
echo "<br>";

for ($i = 1; $i < count($a); $i++) {

    if ($a[$i] % 2 != 0) {
        echo "Número ímpar: $a[$i] <br>";
    }
}


