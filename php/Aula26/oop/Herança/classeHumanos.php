<?php
require_once "classeMamiferos.php";
class Humanos extends Mamiferos {
  private $bipede;

  public function movimentar() {
    echo "Humano andando";
  }
  public function comunicar(){
    echo "Olá Mundo!!!";
  }
  public function andarBicicleta(){
    echo "\nHumano andando de bicicleta";
  }

  public function setEhBipede($value){
    $this->bipede = $value;
  }

  public function getEhBipede(){
    return $this->bipede;
  }
}