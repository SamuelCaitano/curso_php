<?php

include("db.php");
include("dao/CarDAO.php");

$carDao = new CarDao($conn);

$brand =  $_POST['brand'];
$km = $_POST['km'];
$color = $_POST['color'];


$newCar = new Car();

$newCar->setBrand($brand);
$newCar->setKm($km);
$newCar->setColor($color);

$carDao->create($newCar);

header("Location: index.php");