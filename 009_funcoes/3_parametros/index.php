<?php

function velocidadeMax($vel){

    if(is_int($vel)){
        echo "O carro atinge a velocidade máxima de $vel km/h <br>";
    } else {
        echo "Por favor, passe um número inteiro <br>";
    }

}

velocidadeMax(200);
velocidadeMax(320);

// Ao chamar uma funcão que espera parâmetros, e forem omitidos, será gerado um erro
// velocidadeMax();

echo "Teste de continuação do código <br>";

$velocidadeAtual = 125;

// podemos passar váriaveis como parâmetros
velocidadeMax($velocidadeAtual);

// o PHP ignora parâmetros desnecessários
velocidadeMax(190, 200);

// caso o parâmetro passado ou o valor em uma variável seja diferente do esperado,
// o ideal é fazer a verificação de tipo de dado;
velocidadeMax("string");

echo "<br>";

// mais de um parâmetro
function descreverAnimal($nome, $animal){

echo "O $nome é um $animal <br>";

}

descreverAnimal("Theo", "gato");
descreverAnimal("Gesonel", "Pato");
// ao passar poucos argumentos, irá gerar um erro
// descreverAnimal("Gesonel");