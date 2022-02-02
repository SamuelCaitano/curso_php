<?php

include_once "backend.php";

?>

<h1>Seja bem-vindo ao nosso site</h1>
<p> <?= $nome; ?> veja as nossas principais ofertas</p>

<h2>Confira nossos produtos disponíveis abaixo</h2>

<ul>
    <?php foreach ($produtos as $produto): ?>
    <li><?= $produto; ?></li>
    <?php endforeach; ?>
</ul>