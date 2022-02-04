<?php
// mktime (hora, minutos, segundos, mes, dia, ano)
$dataNascimento = mktime(01, 01, 33, 10, 23, 1999);

echo $dataNascimento . "<br>";

$dataNascimentoFormatada = date('d/m/Y', $dataNascimento);

echo $dataNascimentoFormatada ."<br>";