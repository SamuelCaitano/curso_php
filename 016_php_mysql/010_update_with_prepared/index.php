<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "cursophp";

$conn = new mysqli($host, $user, $pass, $db); 

$id = 2;
 
$stmt = $conn->prepare("UPDATE pessoas SET endereco = ? WHERE id = ?");

$endereco = "Av. 36";

$stmt->bind_param("si", $endereco, $id);

$stmt->execute();

$result = $stmt->get_result(); 

if($stmt->error){
  echo "Erro: " . $stmt->error;
}
 
$conn->close(); 

?> 
