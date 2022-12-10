<?php
require_once "classeHumanos.php";
require_once "classeGatos.php";
require_once "classeMamiferos.php";
//Aqui temos o exemplo de herança e polimorfismo
$gato = new Gato();
$humano = new Humanos();
$mamifero = new Mamiferos();

$mamiferos = [$gato, $humano, $mamifero];

foreach($mamiferos as $item){
  echo "\n";
  $item->comunicar();
  if ($item instanceof Humanos)
    $item->andarBicicleta();
}
