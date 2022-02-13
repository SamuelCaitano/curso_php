<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "cursophp";

$conn = new mysqli($host, $user, $pass, $db);

$q = "SELECT * FROM pessoas";

$result = $conn->query($q);

$conn->close();

// UM RESULTADO
// $item = $result->fetch_assoc();

// print_r($item);

// echo "<br><br>";

// TODOS OS RESULTADO
$itens = $result->fetch_all();

print_r($itens);
 