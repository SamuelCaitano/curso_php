<?php

require_once("globals.php");
require_once("db.php");
require_once("models/Movie.php");
require_once("models/Message.php");
require_once("dao/UserDAO.php");
require_once("dao/MovieDAO.php");

$message = new Message($BASE_URL);

$userDao = new UserDAO($conn, $BASE_URL);

// Resgata o tipo do formulário
$type = filter_input(INPUT_POST, "type");

// Resgata dados do usuário
$userData = $userDao->verifyToken();

// Verificação do tipo de formulário
if ($type === "create") {

  // Receber os  dados dos inputs
  $title = filter_input(INPUT_POST, "title"); 
  $release = filter_input(INPUT_POST, "release");
  $pegi = filter_input(INPUT_POST, "pegi");
  $length = filter_input(INPUT_POST, "length");
  $category = filter_input(INPUT_POST, "category");
  $trailer = filter_input(INPUT_POST, "trailer");
  $resolution = filter_input(INPUT_POST, "resolution");
  $description = filter_input(INPUT_POST, "description"); 

  $movie = new Movie();

  // Validação mínima de dados
  if(!empty($title) && !empty($release) && !empty($pegi) && !empty($length) && !empty($category) && !empty($resolution) && !empty($description)){

    $movie->title = $title;
    $movie->release = $release;
    $movie->pegi = $pegi;
    $movie->length = $length;
    $movie->category = $category;
    $movie->trailer = $trailer;
    $movie->resolution = $resolution;
    $movie->description = $description;
    
    // Upload de imagem do filme
    if(isset($_FILES["image"]) && !empty($_FILES["image"]["tmp_name"])){
      
      $image = $_FILES["image"];
      $imageTypes = ["image./jpeg", "image/jpg", "image/png"];
      $jpgArray = ["image./jpeg", "image/jpg"]; 

      // Checando tipo da  imagem
      if(in_array($image["type"], $imageTypes)) {

        // Checa se imagem é jpg
        if(in_array($image["type"], $jpgArray)){

          $imageFile = imagecreatefromjpeg($image["tmp_name"]);

        } else {

          $imageFile = imagecreatefromjpeg($image["tmp_name"]);

        }

        // Gerando o nome da imagem
        $imageName = $movie->imageGenereteName();

        imagejpeg($imageFile, "./img/movies/" . $imageName, 100);

        $movie->image = $imageName;

      } else {

        $message->setMessage("Tipo inválido de imagem, insira png ou jpg!", "error", "back");

      }

    }
    print_r($_POST); print_r($_FILES); exit; 
    $movieDao->create($movie);

  } else {

    $message->setMessage("Preencha todos os campos obrigatórios", "error", "back");

  }

} else {

  $message->setMessage("Informações inválidas!", "error", "index.php");

}
