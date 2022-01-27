<?php

$a = [10, 20, 30, 40, 50, 60, 70, 80, 90, 100];
$x = 0;

while ($x < count($a)) {
    
    $numAtual = $a[$x];

    if ($numAtual === 30 || $numAtual === 40) {
        echo "Pulando a execução <br>";
        $x++;
        continue;
    }
    echo "Elemento: $numAtual <br>";

    $x++;
}
