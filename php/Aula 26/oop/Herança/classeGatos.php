<?php
require_once "classeMamiferos.php";
class Gato extends Mamiferos {
  private $quadrupede;

  public function movimentar() {
    echo "Gato andando";
  }
  public function comunicar(){
    parent::comunicar();
    //echo "Miauuuuu! Miauuuu!";
  }

  public function setEhQuadrupede($value){
    $this->quadrupede = $value;
  }

  public function getEhQuadrupede(){
    return $this->quadrupede;
  }
}