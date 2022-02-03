<?php
// array_chunk() irá dividir um array grande em diversos arrays, com a quantidade informada;
$arr = range(1, 19);

var_dump(array_chunk($arr, 4));