<?php

  Class Car {

    public $rodas = 4;
    private $vidro = "Sem película";
    protected $portas = 4;

    // com os metodos acessores getters e setters, podemos manipular propriedades privadas da classe;
    public function getVidro() {
      return $this->vidro;
    }

    public function setVidro($pelicula) {
        return $this->vidro = $pelicula;
    }

    public function getPortas() {
      return $this->portas;
    }

    public function setPortas($qtdPortas) {
        return $this->portas = $qtdPortas;
      }

  }

  class Mecanico {

    public function alterarRodas($carro) {
      $carro->rodas = 10;
    }

    public function colocarPelicula($carro, $pelicula) {
      $carro->vidro = $pelicula;
    }

  }

  $carro = new Car;

  echo $carro->rodas . "<br>";

  $matheus = new Mecanico;

  $matheus->alterarRodas($carro);

  echo $carro->rodas . "<br>";

  // $matheus->colocarPelicula($carro, "G20");

  echo $carro->getVidro() . "<br>";

  // $carro->vidro = "teste";

  echo $carro->getPortas() . "<br>";


  echo $carro->setVidro("g10") . "<br>";

  echo $carro->SetPortas(3) . "<br>";