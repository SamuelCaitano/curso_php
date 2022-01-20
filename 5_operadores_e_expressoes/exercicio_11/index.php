<?php

$a = "5"; // string
$b = 2; // int
$soma = $a / $b; // double 

echo "A variável a é do tipo " . gettype($a) . "<br>"; 
echo "A variável b é do tipo " . gettype($b) . "<br>";
echo "A variável soma é do tipo " . gettype($soma) . "<br>"; 

echo "<hr>";

echo gettype([]) . "<br>";
echo gettype(12.2) . "<br>";
echo gettype("string") . "<br>"; 