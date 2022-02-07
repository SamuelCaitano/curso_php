<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Ajuda</title>
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Inter:400,800,900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
    <link rel="stylesheet" href="css/style-help.css">
</head>

<body>
    <nav class="header">
        <a href="#" target="blanck">
            <img src="img/beira.png" alt="Logo Hotel Beira Mar" draggable="false">
        </a>
    </nav>
    <main class="main-content-area">
        <div class="tema">
            <img src="img/homeslider-1500-l.png" alt="Imagem meramente ilustrativa do hotel" draggable="false">
        </div>
        <form action="processamento.php" method="$_GET" class="form-help">

            <div class="form-describe input frame-describe">
                <label for="descricao">
                    <h1>Formulário de Ajuda</h1>
                </label>
                <input name="descricao" type="text" id="descricao" title="Descrição do Formulário" alt="Descrição do Formulário" class="form-control" placeholder="Descrição do formulário" spellcheck="true" autocomplete="on" required maxlength="100">
            </div>
            <div class="form-describe input frame-form">
                <label for="nome">Nome completo</label>
                <input name="nome" type="text" id="nome" title="Nome Completo do Remetente " alt="Nome Completo" class="form-control" placeholder="ex: Samuel Caitano da Silva" spellcheck="true" autocomplete="on" required maxlength="40">
            </div>
            <div class="form-describe input frame-form">
                <label for="cnpj">Cnpj</label>
                <input name="cnpj" title="CNPJ da Empresa" alt="Cnpj" type="text" class="form-control" maxlength="14" placeholder="ex: 00.000.000/0001-00" autocomplete="on" id="cnpj" required>
            </div>
            <div class="form-describe input frame-form">
                <label for="email">
                    E-mail
                </label>
                <input title="E-mail da Empresa" alt="Email" type="email" id="email" class="form-control" placeholder="ex: hotelbeiramar@gmail.com" maxlength="60" required>
            </div>
            <div id="submit-button-form">
                <button type="submit" id="gravar" title="Enviar">
                    Enviar
                </button>
            </div>
        </form>
    </main>
    <footer class="footer-main">
        <small>Copyright © Hotel Beira Mar. Todos os direitos reservados.</small>
        <a href="#">Blog</a>
        <a href="https://www.facebook.com/samuelcaitanoo">Facebook</a>
        <a href="#">Twitter</a>
        <a href="https://www.linkedin.com/in/samuelcaitano/">Linkedin</a>
        <a href="https://www.instagram.com/samucaitano/">Instagram</a>
    </footer>
</body>

</html>