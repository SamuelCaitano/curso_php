<?php

require_once("globals.php");
require_once("db.php");
require_once("models/User.php");
require_once("models/Message.php");
require_once("dao/UserDAO.php");

$message = new Message($BASE_URL);

$userDao = new UserDAO($conn, $BASE_URL);

// Resgata o tipo do formulário
$type = filter_input(INPUT_POST, "type");

// Verificação do tipo de formulário
if ($type === "update") {

  // Resgata dados do usuário
  $userData = $userDao->verifyToken();

  // Receber dados do POST
  $name = filter_input(INPUT_POST, "name");
  $lastname = filter_input(INPUT_POST, "lastname");
  $email = filter_input(INPUT_POST, "email");
  $bio = filter_input(INPUT_POST, "bio");

  // Criar um novo objeto de usuário 
  $user = new User();

  $userData->name = $name;
  $userData->lastname = $lastname;
  $userData->email = $email;
  $userData->bio = $bio;

  // Upload da imagem
  if (isset($_FILES["image"]) && !empty($_FILES["image"]["tmp_name"])) {

    $image = $_FILES["image"];
    $imageTypes = ["image/jpeg", "image/jpg", "image/png"];
    $jpgArray = ["image/jpeg", "image/jpg"];

    // Checagem de tipo de imagem
    if (in_array($image["type"], $imageTypes)) {

      // Checar se é jpg
      if (in_array($image, $jpgArray)) {

        $imageFile = imagecreatefromjpeg($image["tmp_name"]);

        // Imagem é png
      } else {

        $imageFile = imagecreatefrompng($image["tmp_name"]);
      }

      // Gerando o nome da imagem
      $imageName = $user->imageGenereteName();

      imagejpeg($imageFile, "./img/users/" . $imageName, 100);

      $userData->image = $imageName;
    } else {

      $message->setMessage("Tipo de imagem inválido!", "error", "back");
    }
  }

  $userDao->update($userData);

  // Atualizar senha do usuário
} else if ($type === "changepassword") {

  // Receber dados do POST 
  $password = filter_input(INPUT_POST, "password");
  $confirmpassword = filter_input(INPUT_POST, "confirmpassword");

  // Resgata dados do usuário
  $userData = $userDao->verifyToken();

  $id = $userData->id;

  // Verifica se as senhas são iguais
  if (hash_equals($password, $confirmpassword)) {

    // Criar um novo objeto de usuário
    $user = new User();

    $finalPassword = $user->generatePassword($password);

    $user->password = $finalPassword;
    $user->id = $id;
    $userDao->changePassword($user);
  } else {

    // Envia uma mensagem de erro, de senhas diferentes
    $message->setMessage("As senhas não são iguais", "error", "back");

  }
} else {

  $message->setMessage("Informações inválidas!", "error", "index.php");
}
