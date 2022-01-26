<?php

$usuario = ["Samuel", "Ravel"];
$usuario_documento = [true, false];
$usuario_ingresso = [true, false];
$usuario_mascara = [true, true];

$msg1 = " entrada liberada!<br>";
$msg2 = " não pode entrar!<br>";

for ($i = 0; $i < count($usuario); $i++) {

    if ($usuario_mascara[$i] == true) {
        if ($usuario_documento[$i] == true) {
            if ($usuario_ingresso[$i] == true) {
                echo $usuario[$i] . $msg1;
            } else {
                echo $usuario[$i] . $msg2;
            }
        } else {
            echo $usuario[$i] . $msg2;
        }
    } else {
        echo $usuario[$i] . $msg2;
    }
}
