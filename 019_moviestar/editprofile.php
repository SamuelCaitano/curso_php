<?php
require_once("templates/header.php");
require_once("dao/UserDAO.php");

$user = new User();

$userDao = new UserDAO($conn, $BASE_URL);

$userData = $userDao->verifyToken(true);

$fullName = $user->getFullName($userData);

if ($userData->image == "") {
  $userData->image = "user.png";
}
?>

<div id="main-container" class="container-fluid">
  <div class="col-md-12">
    <div class="form-group">
      <a href="#change-password-container">Alterar senha</a>
    </div>
    <form action="<?= $BASE_URL ?>user_process.php" method="POST" enctype="multipart/form-data">
      <input type="hidden" name="type" value="update">
      <div class="row">
        <div class="mx-auto  col-md-4">
          <div class="form-group">
            <div id="profile-image-container" class="mt-0 mb-2" style="background-image: url('<?= $BASE_URL ?>img/users/<?= $userData->image ?>')">
            </div>
          </div>
          <div class="form-group form-control-file">
            <label for="image"><i class="fas fa-pen"></i> Editar</label>
            <input type="file" name="image" id="image" class="form-control-file" placeholder="Digite o seu nome" value="<?= $userData->image ?>">
          </div>
          <div class="form-group">
            <h3><?= $fullName ?></h3>
            <p class="page-description">Altere seus dados no formulário abaixo</p>
          </div>
          <div class="form-group">
            <label for="name">Nome</label>
            <input type="text" name="name" id="name" class="form-control bg-transparent" placeholder="Digite o seu nome" value="<?= $userData->name ?>">
          </div>
          <div class="form-group">
            <label for="lastname">Sobrenome</label>
            <input type="text" name="lastname" id="lastname" class="form-control bg-transparent" placeholder="Digite o seu nome" value="<?= $userData->lastname ?>">
          </div>
          <div class="form-group">
            <label for="bio">Bio</label>
            <textarea name="bio" id="bio" class="form-control bg-transparent" rows="4" placeholder="Descreva algo sobre você, seu trabalho seus hobbies..."><?= $userData->bio ?></textarea>
          </div>
          <div class="form-group">
            <label for="email">E-mail</label>
            <div class="d-flex">
              <i class="far fa-at"></i>
              <input type="text" name="email" id="email" class="form-control bg-transparent " placeholder="Digite o seu nome" value="<?= $userData->email ?>">
            </div>
          </div>
          <div class="form-group">
            <input type="submit" class="btn-primary mt-4 card-btn form-control form-btn border bg-success" value="Alterar">
          </div>
        </div>
      </div>
    </form>
    <form action="<?= $BASE_URL ?>user_process.php" method="post">
      <input type="hidden" name="type" value="changepassword">
      <input type="hidden" name="id" value="<?= $userData->id ?>">
      <div class="row" id="change-password-container">
        <div class="mx-auto mt-4  col-md-4">
          <div class="form-group">
            <hr style="height:2px;border-width:0;color:gray;background-color:gray">
            <h2>Alterar a senha</h2>
            <p class="page-description"></p>
          </div>
          <div class="form-group">
            <label for="password">Nova senha</label>
            <input type="password" class="form-control bg-transparent" id="password" name="password" placeholder="Digite a sua nova senha" autocomplete="off">
          </div>
          <div class="form-group">
            <label for="confirmpassword">Confirmar nova senha</label>
            <input type="confirmpassword" class="form-control bg-transparent" id="confirmpassword" name="confirmpassword" placeholder="Digite a sua nova senha" autocomplete="off">
          </div>
          <div class="form-group">
            <input type="submit" class="btn-primary mt-3 card-btn form-control form-btn border bg-secondary" value="Alterar Senha">
          </div>
        </div>
      </div>
    </form>
  </div>
</div>

<?php
require_once("templates/footer.php");
?>