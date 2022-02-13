<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "cursophp";

$conn = new mysqli($host, $user, $pass, $db);

?>

<form action="index.php" method="POST">
  <input type="text" name="email" placeholder="informe o email" require>
  <input type="submit">
</form>

<?php

// atribui a variável o valor do input informado no name email
$email = $_POST['email'];

// prepara uma declaração para execução
$stmt = $conn->prepare("SELECT * FROM pessoas WHERE email = ?");

$stmt->bind_param("s", $email);

$stmt->execute();

$result = $stmt->get_result();

$item = $result->fetch_row();

print_r($item);

$conn->close(); 

?>

