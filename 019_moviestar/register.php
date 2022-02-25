<?php
require_once("templates/head.php");
?>

<?php
require_once("templates/message_alert.php");
?>

<div id="main-container-register" class="container-fluid">
  <div class="row p-3 col-md-12" id="auth-row">
    <div class="mx-auto col-md-4 border border-secondary rounded p-5" id="register-container">
      <h2>Criar uma Conta</h2>
      <p>Já tem uma conta? <a href="<?= $BASE_URL ?>auth.php" title="Faça login">Faça login</a></p>
      <form class="d-inline" action="<?= $BASE_URL ?>auth_process.php" method="POST">
        <input type="hidden" name="type" value="register">
        <div class="form-group">
          <label for="email">Endereço de email</label>
          <input type="email" class="form-control" id="email" name="email" placeholder="Digite seu e-mail" title="Digite seu e-mail" required>
        </div>
        <div class="form-group">
          <label for="name">Nome</label>
          <input type="text" class="form-control" id="name" name="name" placeholder="Digite seu nome" title="Digite seu nome" required>
        </div>
        <div class="form-group">
          <label for="lastname">Sobrenome</label>
          <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Digite seu sobrenome" title="Digite seu sobrenome" required>
        </div>
        <div class="form-group">
          <label for="password">Senha:</label>
          <input type="password" class="form-control" id="password" name="password" placeholder="Digite sua senha" title="Digite sua senha" autocomplete="off" required>
        </div>
        <div class="form-group">
          <label for="confirmpassword">Confirmar senha:</label>
          <input type="password" class="form-control" id="confirmpassword" name="confirmpassword" title="Confirme sua senha" placeholder="Confirme sua senha" autocomplete="off" required>
        </div>
        <div class="form-group">
        <input type="submit" class="btn btn-primary mt-3 card-btn form-control" value="Registrar"> 
        </div>
      </form>
    </div>
  </div>
</div> 
