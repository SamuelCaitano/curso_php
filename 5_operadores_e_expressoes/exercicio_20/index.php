<?php

$a = 3;
$b = 6;
$c = 9;

echo ($a < $b) && ($c > $b) ? "true" : "false";
echo "<br>";

echo $a >= $b ? "true" : "false";
echo "<br>";

echo ($a += $b) === $c ? "true" : "false";
echo "<br>";  