<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "cursophp";

$conn = new mysqli($host, $user, $pass, $db);

$nome = "Raquel";
$sobrenome = "Maria";
$email = "raquel@gmail.com";

$stmt = $conn->prepare("INSERT INTO pessoas(nome, sobrenome, email) VALUES (?, ?, ?)");

// s = sring, i = integer, d = double
$stmt->bind_param("sss", $nome, $sobrenome, $email);

$stmt->execute();

$conn->close();