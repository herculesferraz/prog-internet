<?php
require "classeGato.php";

$gato = new Gato();
$gato->setNome("Loki");
$gato->setCorOlhos("Verde meio Marrom");
$gato->setCorPelo("Preto");
$gato->setRaca("Gato TL");
echo "\nA raça do gato é ".$gato->getRaca();
echo "\n";
print_r($gato,0);