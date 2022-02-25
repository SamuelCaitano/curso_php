<?php
require_once("templates/head.php");
?>

<div id="main-container-auth" class="container-fluid">
  <div class="row p-3 col-md-12" id="auth-row">
    <div class="mx-auto col-md-4 border border-secondary rounded p-5" id="login-container">

      <?php require_once("templates/backbtn.html") ?>

      <h2>Fazer Login</h2>
      <p>Novo usuário? <a href="<?= $BASE_URL ?>register.php" title="Crie uma conta">Crie uma conta</a></p>
      <form class="d-inline" action="<?= $BASE_URL ?>auth_process.php" method="POST">
        <input type="hidden" name="type" value="login">
        <div class="form-group">
          <label for="email">E-mail:</label>
          <input type="email" class="form-control" id="email" name="email" placeholder="Digite seu e-mail" title="Digite seu e-mail" autocomplete="off" required>
        </div>
        <div class="form-group">
          <label for="password">Senha:</label>
          <input type="password" class="form-control" id="password" name="password" placeholder="Digite sua senha" title="Digite sua senha" autocomplete="off" required>
        </div>
        <div class="form-group">
          <input type="submit" title="Entrar" class="btn btn-primary mt-3 card-btn form-control" value="Entrar">
        </div>
      </form>
    </div>
  </div>
</div>