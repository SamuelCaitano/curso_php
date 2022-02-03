<?php

$arr1 = [1, 2, 3];
$arr2 = [4, 5, 6];
$arr3 = [7, 8, 9, 10];
$arr4 = ["teste", "de", "uniao"];

$arrMerge = array_merge($arr1, $arr2, $arr3, $arr4, [2022]);

print_r($arrMerge);
echo "<br>";