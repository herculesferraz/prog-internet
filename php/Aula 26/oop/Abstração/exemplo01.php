<?php
// Abstração de uma pizza para programação
// Classe seria como o molde de um objeto
class PizzaCalabreza {
  public $temBordaRecheada = false;

  public function preparar(){
    echo "Colocando molho na pizza\n";
    echo "Colocando as rodelas de Calabreza na pizza\n";
    echo "Colocando as queijo na pizza\n";
    if ($this->temBordaRecheada)
      echo "Colocando requeijão na borda da pizza\n";
  }

  public function assar(){
    echo "Assar por 15 minutos\n";
  }

  public function comercializar(){
    echo "Vender à R$ 50,00";
  }
}

class PizzaChocolate {
  public function preparar(){
    echo "passar cobertura de chocolate meio amargo\n";
    echo "colocar cerejas nas extremidades\n";
  }
  public function assar(){
    echo "assar por 8 minutos";
  }
  public function comercializar(){
    echo "vender à R$ 30,00";
  }
}
// Criar uma pizza
$pizzaCalabreza = new PizzaCalabreza();
$pizzaCalabreza->temBordaRecheada = true;
$pizzaCalabreza->preparar();
$pizzaCalabreza->assar();
$pizzaCalabreza->comercializar();
echo "\n";
$pizzaChocolate = new PizzaChocolate();
$pizzaChocolate->preparar();
$pizzaChocolate->assar();
$pizzaChocolate->comercializar();
echo "\n";
$pizzaCalabreza1 = new PizzaCalabreza();
$pizzaCalabreza1->temBordaRecheada = "Chocolate";
$pizzaCalabreza1->preparar();
$pizzaCalabreza1->assar();
$pizzaCalabreza1->comercializar();

