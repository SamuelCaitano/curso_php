<?php

function teste($a = "teste") {

    echo "O valor de A é: $a <br>";

}

teste();
teste("Samuel");


// Inclua os parâmetros default, sempre depois de um parâmetro normal, para evitar erros
function testeDefault($b, $c = "<b>teste C</b>"){

    echo "O valor de B é: $b e de C é: $c <br>";

}

// passando apenas o primeiro parâmetro
testeDefault("<b>1º teste</b>");

// passando os dois parâmetros
testeDefault("<b>1º teste</b>", "<b>2º teste</b>");