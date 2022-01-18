<?php

// criamos essa variavél para futuramente alterar apenas o seu valor, e não o código por completo
$maioridade = 18; 

$pessoa = [
    'nome' => 'Samuel',
    'idade' => 22,
    'sexo' => 'Masculino',
    'altura' => 171
];

// verifica se a idade foi informada
if (is_null($pessoa['idade'])) { 
    echo "idade não informada";
} else { 
    // verifica se a idade e menor que a maioridade civil
    if ($pessoa['idade'] < $maioridade) 
        echo $pessoa['nome'], " é menor de idade"; 
    // verifica se a idade e maior que a maioridade civil
    if ($pessoa['idade'] > 17) 
        echo $pessoa['nome'], " é maior de idade"; 
}
