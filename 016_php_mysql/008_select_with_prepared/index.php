<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "cursophp";

$conn = new mysqli($host, $user, $pass, $db);

// buscando os dados diferentes do email informado
$email = "smlcaitano@gmail.com";

$stmt = $conn->prepare("SELECT * FROM pessoas WHERE email != ?");

// s = sring, i = integer, d = double
$stmt->bind_param("s", $email);

$stmt->execute();

$result = $stmt->get_result();

$data = $result->fetch_all();

print_r($data);

$conn->close();