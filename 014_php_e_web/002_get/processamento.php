<?php

// print_r($_GET);

if(isset($_GET['nome'])){
    $nome = $_GET['nome'];
}else {
    $nome =  "Padrão";
}

?>
<h1>Olá <?= $nome ?>, já visualizamos sua mensagem, entraremos em contato em breve!</h1>