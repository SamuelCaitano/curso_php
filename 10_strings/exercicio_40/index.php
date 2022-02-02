<?php

$frase = "O rato roeu a roupa do rei de Roma";
$cont = 0;

for($i = 0; $i < strlen($frase); $i++){

    if($frase[$i] === "o" || $frase[$i] === "O"){        
        $cont++;
    }

}

echo "contem $cont letras O";