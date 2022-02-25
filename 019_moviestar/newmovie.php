<?php
require_once("templates/header.php");

// Verifica se o usuário está autenticado
require_once("models/User.php");
require_once("dao/UserDAO.php");

$user = new User();
$userDao = new UserDAO($conn, $BASE_URL);

$userData = $userDao->verifyToken(true);

?>

<div id="main-container" class="container-fluid">
  <div class="offset-md-4 col-md-4 new-movie-container">
    <div class="form-group">
      <h1 class="page-title">Adicionar Filme</h1>
      <p class="page-description">Adicione sua crítica e compartilhe com o mundo!</p>
    </div>
    <form action="<?= $BASE_URL ?>movie_process.php" method="post" id="add-movie-form" enctype="multipart/form-data">
      <input type="hidden" name="type" value="create">
      <div class="form-group">
        <label for="title">Título</label>
        <input type="text" class="form-control bg-transparent" id="title" name="title" placeholder="Informe o título do filme">
      </div>
      <div class="form-group">
        <label for="image">Imagem</label>
        <input type="file" name="image" id="image" class="">
      </div>
      <div class="form-group">
        <label for="release">Ano de Lançamento</label>
        <input type="text" class="form-control bg-transparent" id="release" name="release" placeholder="Informe a duração do filme">
      </div>
      <div class="form-group">
        <label for="pegi">Classificação indicada</label>
        <div class="d-flex pegi">  
          <select class="form-control bg-transparent" id="pegi" name="pegi">
          <option selected disabled value="">Selecione</option>
          <option value="Livre">Livre para todo público</option>
          <option value="12">Proibido para menores de 12</option>
          <option value="16">Proibido para menores de 16</option>
          <option value="18">Proibido para menores de 18</option> 
        </select>
          <p>L</p>
        </div>
      </div>
      <div class="form-group">
        <label for="length">Duração</label>
        <div class="d-flex">          
          <input type="text" class="form-control bg-transparent" id="length" name="length" placeholder="Informe a duração do filme">
          <i class="fas fa-clock"></i>
        </div>
      </div>
      <div class="form-group">
        <label for="category">Categoria</label>
        <select class="form-control bg-transparent" id="category" name="category">
          <option selected disabled value="">Selecione</option>
          <option value="Ação">Ação</option>
          <option value="Drama">Drama</option>
          <option value="Comédia">Comédia</option>
          <option value="Suspense">Suspense</option>
          <option value="Ficção">Ficção</option>
          <option value="Romance">Romance</option>
        </select>
      </div>
      <div class="form-group">
        <label for="trailer">Trailer</label>
        <input type="text" name="trailer" id="trailer" class="form-control bg-transparent" placeholder="Insira o link do trailer">
      </div>
      <div class="form-group">
        <label for="resolution">Qualidade</label>
        <select class="form-control bg-transparent" id="resolution" name="resolution">
          <option selected disabled value="">Selecione</option>
          <option value="HD">HD</option>
          <option value="FULL HD">Full HD</option>
          <option value="2K">2K</option>
          <option value="4K">4K</option>
        </select>
      </div>
      <div class="form-group">
        <label for="description">Descrição</label>
        <textarea name="description" id="description" class="form-control bg-transparent" rows="4" placeholder="Descreva algo sobre o filme"></textarea>
      </div>
      <div class="form-group">
        <input type="submit" class="btn btn-primary mt-4 card-btn form-btn form-control border bg-success" value="Adicionar Filme">
      </div>

    </form>
  </div>
</div>

<?php
require_once("templates/footer.php");
?>