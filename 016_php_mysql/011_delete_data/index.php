<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "cursophp";

$conn = new mysqli($host, $user, $pass, $db);

$stmt = $conn->prepare("SELECT * FROM pessoas");

$stmt->execute();

$result = $stmt->get_result();

$data = $result->fetch_all();

var_dump($data); 

#======================#

$id = 3;

$stmt = $conn->prepare("DELETE FROM pessoas WHERE id = ?");

$stmt->bind_param("i", $id);

$stmt->execute();  

$conn->close();