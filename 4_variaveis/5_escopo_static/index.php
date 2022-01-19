<?php

function teste() {

    $a = 0;
    $a++;

    echo "$a <br>";
}

teste();
teste();
teste();
echo "<hr>";

function testeStatic() {

    static $a = 0;
    $a++;

    echo "$a <br>";
}

testeStatic();
testeStatic();
testeStatic();
echo "<hr>";