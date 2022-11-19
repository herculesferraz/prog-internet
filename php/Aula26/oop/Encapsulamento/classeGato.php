<?php
class Gato {
  private $corPelo;
  private $raca;
  private $corOlhos;
  private $nome;
  // setters
  public function setCorPelo($value){
    $this->corPelo = $value;
  } 

  public function setRaca($value){
    $this->raca = $value;
  }

  public function setCorOlhos($value){
    $this->corOlhos = $value;
  }

  public function setNome($value){
    $this->nome = $value;
  }
  // Getters

  public function getCorPelo(){
    return $this->corPelo;
  }

  public function getRaca(){
    return $this->raca;
  }

  public function getCorOlhos(){
    return $this->corOlhos;
  }

  public function getNome(){
    return $this->nome;
  }

  public function __toString()
  {
    $retorno  = "-----------------------\n";
    $retorno .= "Nome: ". $this->getNome(). "\n";
    $retorno .= "Raça: ". $this->getRaca(). "\n";
    $retorno .= "Olhos: ". $this->getCorOlhos(). "\n";
    $retorno .= "Cor Pelo: ". $this->getCorPelo(). "\n";
    $retorno .= "-----------------------\n";
    return $retorno; 
  }
}