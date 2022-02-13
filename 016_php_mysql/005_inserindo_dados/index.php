<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "cursophp";

$conn = new mysqli($host, $user, $pass, $db);

$table = "pessoas";
$nome = "Samuel";
$sobrenome = "Caitano";
$email = "smlcaitano@gmail.com";

$q = "INSERT INTO $table (nome, sobrenome, email) VALUES ('$nome', '$sobrenome', '$email')";

$conn->query($q);

print_r(mysqli_error($conn));


$conn->close();
