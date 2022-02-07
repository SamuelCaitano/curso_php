<?php

if (isset($_FILES['imagem'] )) {
    print_r($_FILES); 
    $imagem = $_FILES['imagem'];
}

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Produto</title>
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Inter:400,800,900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">

        <main class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-12 main-content-area">
            <h1 class="frame-title">Cadastrar Produto</h1>
            <form action="index.php" method="POST" enctype="multipart/form-data">
                <div>
                    <input type="file" name="imagem">
                </div>
                <div>
                    <input type="submit" value="Enviar">
                </div>
            </form>
            <form class="form-group-main">
                <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10 col-10">
                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 col-2 form-camp-photo">
                        <div class="frame-photo-profile">
                            <img title="Foto de perfil do Produto" id="photo-profile" src="img/perfil.png" alt="Foto de perfil do Produto" draggable="false">
                            <div>
                                <button name="adicionar" id="adicionar" title="Adicionar">
                                    Adicionar
                                </button>
                                <button name="remover" id="remover" title="Remover">
                                    Remover
                                </button>
                            </div>
                        </div>
                    </div>
                    <hr style="height: 5px;">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-12 row form-group-informations">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-6 col-6">
                            <label for="nome">
                                <span style="color: #0449c9; size: 30px; font-weight: bold;">*</span>
                                Nome do produto
                            </label>
                            <input name="nome" type="text" id="nome" title="Nome do produto" alt="Nome do produto" class="form-control" placeholder="ex: Coca cola" maxlength="40" autocomplete="on" autocapitalize="on" spellcheck="true" required>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-xs-3 col-3">
                            <label for="quantidade">
                                <span style="color: #0449c9; size: 30px; font-weight: bold;">*</span>
                                Und. Medida
                            </label>
                            <input name="quantidade" type="number" id="quantidade" title="Quantidade" alt="Quantidade" class="form-control" placeholder="ex: 350ml" onkeypress="return event.charCode >=48" min="0" max="100000" required>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-xs-3 col-3">
                            <label for="lucroPorProduto">
                                <span style="color: #0449c9; size: 30px; font-weight: bold;">*</span>
                                Finalidade
                                <i class="fas fa-angle-down"></i>
                            </label>
                            <select name="lucroPorProduto" id="lucroPorProduto" class="form-control" required>
                                <option value="">--</option>
                                <option value="">Venda</option>
                                <option value="">Consumo interno</option>
                            </select>
                        </div>
                        <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9 col-xs-9 col-9">
                            <label for="obsProduto">
                                Observação
                            </label>
                            <input name="obsProduto" type="text" id="obsProduto" title="Observação" alt="Observação" class="form-control" id="obsProduto" spellcheck="true" maxlength="40" autocomplete="on">
                        </div>
                        <div id="submit-button-form">
                            <button type="submit" id="gravar" title="Gravar">Gravar</button>
                        </div>
                    </div>
                </div>
            </form>
        </main>

        <footer class="footer-main">
            <small>Copyright © Hotel Beira Mar. Todos os direitos reservados.</small>
            <a href="#">Blog</a>
            <a href="#">Facebook</a>
            <a href="#">Twitter</a>
            <a href="#">Linkedin</a>
            <a href="#">Instagram</a>
        </footer>
    </div>
</body>

<script type="text/javascript" src="script/calendario.js"></script>

</html>