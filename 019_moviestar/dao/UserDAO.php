<?php

require_once("models/User.php");
require_once("models/Message.php");


class UserDAO implements UserDAOInterface
{
  private $conn;
  private $url;
  private $message;

  public function __construct(PDO $conn, $url)
  {
    $this->conn = $conn;
    $this->url = $url;
    $this->message = new Message($url);
  }

  public function buildUser($data)
  {
    // Cria uma nova instancia de um objeto User()
    $user = new User();

    $user->id = $data["id"];
    $user->name = $data["name"];
    $user->lastname = $data["lastname"];
    $user->email = $data["email"];
    $user->password = $data["password"];
    $user->image = $data["image"];
    $user->bio = $data["bio"];
    $user->token = $data["token"];

    return $user;
  }

  public function create(User $user, $authUser = false)
  {
    $stmt = $this->conn->prepare("INSERT INTO users(
      name, lastname, email, password, token
    ) VALUES (
      :name, :lastname, :email, :password, :token
    )");

    $stmt->bindParam(":name", $user->name);
    $stmt->bindParam(":lastname", $user->lastname);
    $stmt->bindParam(":email", $user->email);
    $stmt->bindParam(":password", $user->password);
    $stmt->bindParam(":token", $user->token);

    $stmt->execute();

    // Autenticar usuário, caso auth seja true
    if ($authUser) {
      $this->setTokenToSession($user->token);
    }
  }

  public function update(User $user, $redirect = true)
  {
    $stmt = $this->conn->prepare("UPDATE users SET
      name = :name,
      lastname = :lastname,
      email = :email,
      image = :image,
      bio = :bio,
      token = :token
      WHERE id = :id
    ");

    $stmt->bindParam(":name", $user->name );
    $stmt->bindParam(":lastname", $user->lastname );
    $stmt->bindParam(":email", $user->email );
    $stmt->bindParam(":image", $user->image );
    $stmt->bindParam(":bio", $user->bio );
    $stmt->bindParam(":token", $user->token );
    $stmt->bindParam(":id", $user->id );

    $stmt->execute();

    if ($redirect) {

      // Redireciona para o perfil do usuário
      $this->message->setMessage("Dados atualizados com sucesso!", "success", "editprofile.php");
      
    }
  }
  public function verifyToken($protected = false)
  {

    // Verifica se existe um token setado
    if (!empty($_SESSION["token"])) {

      // Pega o token da session
      $token = $_SESSION["token"];

      $user = $this->findByToken($token);

      if ($user) {
        return $user;
      } else if ($protected) {

        // Redireciona usuário não autenticado
        $this->message->setMessage("Faça a autenticação para acessar esta página!", "error", "index.php");
      }
    } else if ($protected) {

      // Redireciona usuário não autenticado
      $this->message->setMessage("Faça a autenticação para acessar esta página!", "error", "index.php");
    }
  }

  public function setTokenToSession($token, $redirect = true)
  {

    // Salvar token na session
    $_SESSION["token"] = $token;

    if ($redirect) {

      // Redireciona para o perfil do usuário
      $this->message->setMessage("Seja bem-vindo!", "success", "editprofile.php");

    }
  }

  public function authenticateUser($email, $password)
  {

    $user = $this->findByEmail($email);

    if ($user) {

      // Checar se as senhas batem
      if (password_verify($password, $user->password)) {

        // Gerar um token e inserir na session
        $token = $user->generateToken();

        $this->setTokenToSession($token, false);

        // Atualizar o token no usuário
        $user->token = $token;

        $this->update($user, false);

        return true;

      } else { 
        return false;
      }

    } else {
      return false;
    }
  }

  public function findByEmail($email)
  {

    // Verifica se o valor da váriavel passada nos parâmetros é diferente de vazio
    if ($email != "") {

      $stmt = $this->conn->prepare("SELECT * FROM users WHERE email = :email ");

      $stmt->bindParam(":email", $email);

      $stmt->execute();

      // Verifica se há algum retorno de dado
      if ($stmt->rowCount() > 0) {

        // Busca apenas um retorno, pois, não havera mais de um email igual
        $data = $stmt->fetch();

        $user = $this->buildUser($data);

        // Recebe o retorno do método buildUser e retorna true para o auth_process.php
        return $user;
      } else {

        return false;
      }
    } else {

      // Essa condição não será acessada, se, no front o input for declarado required
      return false;
    }
  }

  public function findById($id)
  {
  }
  public function findByToken($token)
  {
    // Verifica se o valor da váriavel passada nos parâmetros é diferente de vazio
    if ($token != "") {

      $stmt = $this->conn->prepare("SELECT * FROM users WHERE token = :token ");

      $stmt->bindParam(":token", $token);

      $stmt->execute();

      // Verifica se há algum retorno de dado
      if ($stmt->rowCount() > 0) {

        // Busca apenas um retorno, pois, não havera mais de um email igual
        $data = $stmt->fetch();

        $user = $this->buildUser($data);

        // Recebe o retorno do método buildUser e retorna true para o auth_process.php
        return $user;
      } else {

        return false;
      }
    } else {

      // Essa condição não será acessada, se, no front o input for declarado required
      return false;
    }
  }

  public function destroyToken()
  {

    // Remove o token da session
    $_SESSION["token"] = "";

    // Redirecionar e apresentar a mensagem de sucesso
    $this->message->setMessage("Logout realizado com sucesso", "success", "index.php");
  }

  public function changePassword(User $user)
  {

    $stmt = $this->conn->prepare("UPDATE users SET 
    password = :password 
    WHERE id = :id
    ");

    $stmt->bindParam(":password", $user->password);
    $stmt->bindParam(":id", $user->id);

    $stmt->execute();

    // Redirecionar e apresentar a mensagem de sucesso
    $this->message->setMessage("Senha alterada com sucesso!", "success", "editprofile.php");

  }
}
