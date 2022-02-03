<?php

$str = "Testando a função strstr(), irei pegar apartir daqui, Olá mundo";

$resto = strstr($str, "Olá");

echo "$resto <br>";

if(strstr($str, "PHP") === false){
    echo "Não encontramos essa palavra! <br>";
}