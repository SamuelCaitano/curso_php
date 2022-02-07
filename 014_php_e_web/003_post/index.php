<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head> 
<body>
    <form action="cadastro.php" method="POST">
        <div>
            <input type="text" name="marca" placeholder="Marca do carro">
        </div>
        <div>
            <input type="text" name="preco" placeholder="Preço do carro">
        </div>
        <h2>Opcionais</h2>
        <div>
            <input type="checkbox" name="opcionais[]" id="" value="Teto solar">Teto solar
        </div>
        <div>
            <input type="checkbox" name="opcionais[]" id="" value="Vidro elétrico">Vidro elétrico
        </div>
        <div>
            <input type="checkbox" name="opcionais[]" id="" value="Ar condicionado">Ar condicionado
        </div>
        <div>
            <input type="checkbox" name="opcionais[]" id="" value="Bancos de couro">Bancos de couro
        </div>
        <br>
        <div>
            <input type="submit" value="Enviar" name="" id="">
        </div>
    </form>
</body>

</html>