<?php

echo "<h1>Antes do include_once</h1>";
// Arquivos não existentes
// include_once "teste.php";

// Arquivos que existem
// o php irá inserir apenas uma vez o arquivo
include_once "teste2.php";
include_once "teste2.php";

echo "<h1>Depois do include_once</h1>";
echo "<h1>Antes do require_once</h1>";

// o php irá inserir apenas uma vez o arquivo
require_once "teste3.php";
require_once "teste3.php";
// Arquivos não existentes
// require_once "teste.php";

echo "<h1>Depois do require_once</h1>";