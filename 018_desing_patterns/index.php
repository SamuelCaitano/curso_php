<?php

include_once("db.php"); 
include_once("dao/CarDAO.php");

$carDao = new CarDAO($conn);

$cars = $carDao->findAll();

?>
<div class="container">

  <div class="form align-self-center ">
    <h1 class="title-main">Insira um carro:</h1>
    <form action="process.php" method="POST">
      <div class="mb-3">
        <label for="brand">Marca do carro:</label>
        <input type="text" name="brand" placeholder="Insira a marca " required>
      </div>
      <div class="mb-3">
        <label for="km">Kilometragem:</label>
        <input type="text" name="km" placeholder="Insira a km" required>
      </div>
      <div class="mb-3">
        <label for="color">Cor do carro:</label>
        <input type="text" name="color" placeholder="Insira a color" required>
      </div>
      <input type="submit" value="Salvar">
    </form>
  </div>
  <ul> 
      <?php foreach ($cars as $car) : ?>        
        <li><?= $car->getBrand() ?> - <?= $car->getKm() ?> - <?= $car->getColor() ?></li>
      <?php endforeach ?> 
  </ul>
</div>