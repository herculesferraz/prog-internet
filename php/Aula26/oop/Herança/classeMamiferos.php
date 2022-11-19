<?php
class Mamiferos {
  private $corPele;
  private $corOlhos;
  private $idade;

  public function movimentar(){
    echo "Mamifero movimentando";
  }

  public function comunicar(){
    echo "Mamifero se comunicando";
  }

  // setters e getters
  public function setCorPele($value){
    $this->corPele = $value;
  }

  public function setCorOlhos($value){
    $this->corOlhos = $value;
  }

  public function setIdade($value){
    $this->idade = $value;
  }

  public function getCorPele(){
    return $this->corPele;
  }

  public function getCorOlhos(){
    return $this->corOlhos; 
  }

  public function getIdade(){
    return $this->idade;
  }

}