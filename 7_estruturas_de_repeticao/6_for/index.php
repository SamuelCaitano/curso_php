<?php
$nome = "Samuel";

// contador; condição; incremento/decremento
for($i = 0; $i < 10; $i++){

    if($i == 2 || $i == 6){
        echo "$nome <br>";
        continue;
    }

    echo "Testando for $i <br>";
}