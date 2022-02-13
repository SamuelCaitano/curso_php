<?php

$host = "localhost";
$db = "cursophp";
$user = "root";
$pass = "";

$conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);

?>

<form action="index.php" method="POST">
  <input type="text" name="id" placeholder="id">
  <input type="text" name="email" placeholder="email">
  <input type="submit" value="Enviar">
</form>

<?php

$id = $_POST['id'];
$email = $_POST['email'];

$stmt = $conn->prepare("SELECT * FROM pessoas WHERE id = :id OR email = :email");

$stmt->bindParam(":id", $id);
$stmt->bindParam(":email", $email);

$stmt->execute();

$data = $stmt->fetch(PDO::FETCH_ASSOC);

if ($data == false) {
  echo "Usuário não encontrado";
} else {
  var_dump($data);
}

?>