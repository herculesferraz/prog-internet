<?php

use Classes\Cliente;
use Classes\Pedido;
use Classes\Pizza;

require_once("inicializar.php");

//$pizza = Pizza::create(["nome"=>"Bauru","descricao"=>"Bauru","valor"=>50.00]);
/*
$pizza = Pizza::findByPk([5]);
$pizza->descricao = "Escarola com chuchu";
echo $pizza->nome."\n";
$pizza->save();

$pizza = Pizza::findByPk([16]);
echo "\nA pizza que encontrei foi essa: " . $pizza->nome;
echo "\nDeseja mesmo apagar?\n";
$pizza->destroy();
*/
$cliente = Cliente::findByPk([13]);
echo "\nNome do cliente é: " . $cliente->nome;
$cliente->nome = "Roberval Carvalho de Alcantra Neves";
$cliente->save();
//Criando um pedido
$pedido = Pedido::create(["cliente_id"=>1,"data"=>"2022-12-10 11:25:00",
                          "valor"=>50.00]);
                          
echo "\nO pedido foi gerado sob o número: " . $pedido->pedido_id;

