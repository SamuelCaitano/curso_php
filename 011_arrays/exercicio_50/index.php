<?php

$pessoa = [
    'Samuel' => 22,
    'Matheus' => 29,
    'Aline' => 27,
    'Raquel' => 18,
    'Camila' => 10
];

?> 

<table border="1" >
    <tr>
        <th>Nome</th>
        <th>Idade</th>
    </tr>
    <?php foreach ($pessoa as $nome => $idade): ?>
     <tr>
         <td><?= $nome;?></td>
         <td><?= $idade;?></td>
     </tr>
    <?php endforeach;?>
</table>