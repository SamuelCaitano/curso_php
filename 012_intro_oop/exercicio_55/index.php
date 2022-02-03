<?php

class Car {
    public $brand;
    public $model;
    public $speedMax;

    function getSpeedMax() {
        return $this->speedMax;
    }

    function setSpeedMax($speed) {
        $this->speedMax = $speed;
    }
}

$civic = new Car;

$civic->brand = "Honda";
$civic->model = "Civic G10";
$civic->speedMax = 210;

echo $civic->getSpeedMax() . "<br>";

$civic->setSpeedMax(260);

echo $civic->getSpeedMax() . "<br>";
