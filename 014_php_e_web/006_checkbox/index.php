<?php

if(isset($_POST['pecas'])){
    $pecas = $_POST['pecas'];
    print_r($pecas);
} 
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="POST">
        <div>
            <input type="checkbox" name="pecas[]" value="Correia Dentada">Correia Dentada
        </div>
        <div>
            <input type="checkbox" name="pecas[]" value="Correia Alternador">Correia Alternador
        </div>
        <div>
            <input type="checkbox" name="pecas[]" value="Tensor Alternador">Tensor Alternador 
        </div>
        <div>
            <input type="checkbox" name="pecas[]" value="Reservatorio">Reservatorio
        </div>
        <div>
            <input type="checkbox" name="pecas[]" value="Lampada LED 6000K">Lampada LED 6000K
        </div>
        <div>
            <input type="submit" value="Enviar">
        </div>
    </form>
</body>
</html>