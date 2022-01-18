<?php

    // Pode ser inserido qualquer tipo de dado
    // é delimitado por colchetes[], e seus item e separados por vírgula
    // a chave doa array associativo deve estar entre aspas
    $arr = ['nome' => 'Samuel Caitano', 'idade' => 22];

    // agora podemos acessar o dado por meio da sua chave
    echo $arr ['nome'];
    echo "<br>";
    print_r($arr);
    echo "<br>";
    echo $arr ['idade'];
 
?>