<?php

$ranking = [
    'Samuel' => 2000,
    'Raquel' => 1679,
    'Gabi' => 2755,
    'Matheus' => 1986,
    'Felipe' => 1243
];

arsort($ranking);

?>

<h1>Racking: </h1>
<ol>
    <?php foreach ($ranking as $pessoa => $pontos): ?>
        <li><?= $pessoa ?> -> <?= $pontos ?> pontos</li>
    <?php endforeach?>
</ol>