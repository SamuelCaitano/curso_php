<?php

$host = "localhost";
$db = "cursophp";
$user = "root";
$pass = "";

$conn = new PDO("mysql:host=$host;dbname=$db", "$user", "$pass");

?>

<form action="index.php" method="POST">
  <input type="text" name="nome" placeholder="nome" require>
  <input type="text" name="sobrenome" placeholder="sobrenome" require>
  <input type="text" name="idade" placeholder="idade" require>
  <input type="text" name="email" placeholder="email" require>
  <input type="text" name="endereco" placeholder="endereco" require> 
  <input type="submit" value="Enviar">
</form>

<?php
 
$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$idade = $_POST['idade'];
$email = $_POST['email'];
$endereco = $_POST['endereco'];

$stmt = $conn->prepare("INSERT INTO pessoas (nome, sobrenome, idade, email, endereco) VALUES (:nome, :sobrenome, :idade, :email, :endereco)");

$stmt->bindParam(":nome", $nome);
$stmt->bindParam(":sobrenome", $sobrenome);
$stmt->bindParam(":idade", $idade);
$stmt->bindParam(":email", $email);
$stmt->bindParam(":endereco", $endereco);

$stmt->execute(); 

?>
