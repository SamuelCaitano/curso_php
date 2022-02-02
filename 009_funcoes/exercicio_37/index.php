<?php

use function PHPSTORM_META\override;

function defineCorCarro($cor = "preto"){

    return "A cor do carro é " . $cor;

}
 
$corCarro = defineCorCarro("azul"); 
echo $corCarro . "<br>";

// default
$corCarro = defineCorCarro();
echo $corCarro . "<br>";