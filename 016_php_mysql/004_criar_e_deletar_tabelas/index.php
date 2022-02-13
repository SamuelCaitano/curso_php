<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "cursophp";

$conn = new mysqli($host, $user, $pass, $db);

// 

// $q = "CREATE TABLE teste(nome VARCHAR(15), sobrenome VARCHAR(30));";

$q = "DROP TABLE teste";

$conn->query($q);

$conn->close();