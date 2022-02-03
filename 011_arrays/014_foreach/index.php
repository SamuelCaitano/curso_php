<?php

$samuel = [
    'nome' => 'Samuel',
    'idade' => 22,
    'sexo' => 'Masculino'
];

$camila = [
    'nome' => 'Camila',
    'idade' => 22,
    'sexo' => 'Feminino'
];

foreach ($samuel as $infoSam => $value) {
    echo "$infoSam: $value <br>";
}

echo "<br>";

foreach ($camila as $infoCam => $value) {
    echo "$infoCam: $value<br>";
}