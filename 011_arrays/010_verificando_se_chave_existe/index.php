<?php
// array_key_exists() = verifica a chave de um array existe
// isset() = verifica a chave de um array existe, sendo mais utilizado

$arr = [
    'nome' => 'Samuel',
    'idade' => 22, 
    'sexo' => 'Masculino' 
];
 
// funcao ('chave', $array);

if(array_key_exists('idade', $arr)){
    echo "A chave existe! <br>";
} else {
    echo "A chave não existe! <br>";
}

if(array_key_exists('profissao', $arr)){
    echo "A chave existe! <br>";
} else {
    echo "A chave não existe! <br>";
}

// funcao ($array['chave']);

if(isset($arr['nome'])){
    echo "A chave existe! ISSET <br>";
} else {
    echo "A chave não existe! ISSET <br>";
}

// O isset() também verifica se variaveis existem;

if(isset($variavel)){
    echo "A variável existe! ISSET <br>";
} else {
    echo "A variável não existe! ISSET <br>";
}