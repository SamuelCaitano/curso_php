<?php

$x = 1;
$msg = " execução  ";

// irá executar pelo menos uma vez
do {
    echo "$x $msg  do while 1<br>";
    $x++;
} while ($x < 1);

echo "<hr>";

$i = 1;

// não irá executar
while ($i < 1) {
    echo "$x $msg  execução while <br>";
    $i++;
}

echo "<hr>";

$z = 1;

do {
    echo "$z $msg  do while 2 <br>";
    $z++;
} while ($z <= 10);
 
