<?php

require_once("head.php");

?>

<body>
  <header>
    <nav id="main-navbar" class="navbar navbar-expand-lg ">
      <a href="<?= $BASE_URL ?>" class="navbar-brand">
        <img src="<?= $BASE_URL ?>img/logo.svg" alt="MovieStar" id="logo">
        <span id="moviestar-title">MovieStar</span>
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-bars"></i>
      </button>
      <form action="" method="GET" id="search-form" class="form-inline my-2 my-lg-0">
        <input type="text" name="q" id="search" class="form-control mr-sm-2" type="search" placeholder="Buscar Filmes" aria-label="Search">
        <button class="btn my-2 my-sm-0" type="submit">
          <i class="fas fa-search"></i>
        </button>
      </form>
      <div class="collapse navbar-collapse" id="navbar">
        <ul class="navbar-nav">
          <?php if ($userData) : ?>
            <li class="nav-item">
              <a href="<?= $BASE_URL ?>newmovie.php" class="nav-link">Inclui Filme</a>
            </li>
            <li class="nav-item">
              <a href="<?= $BASE_URL ?>dashboard.php" class="nav-link">Meus Filmes</a>
            </li>
            <li class="nav-item">
              <div class="d-flex">
                <div id="profile-image-user" class="mt-0 mb-2" style="background-image: url('<?= $BASE_URL ?>img/users/<?= $userData->image ?>')">
                </div>
                <div>
                  <a href="<?= $BASE_URL ?>editprofile.php" class="nav-link bold"><?= $userData->name ?></a>
                </div>
              </div>

            </li>
            <li class="nav-item">
              <a href="<?= $BASE_URL ?>logout.php" class="nav-link text-danger">Sair</a>
            </li>
          <?php else : ?>
            <li class="nav-item">
              <a href="<?= $BASE_URL ?>auth.php" class="nav-link">Fazer Login</a>
            </li>
          <?php endif; ?>
        </ul>
      </div>
    </nav>
  </header>

  <?php
  require_once("templates/message_alert.php");
  ?>