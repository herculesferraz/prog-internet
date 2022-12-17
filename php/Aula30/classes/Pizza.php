<?php

namespace Classes;

use JetBrains\PhpStorm\Internal\ReturnTypeContract;

class Pizza extends Database {
  public function __construct()
  {
    parent::__construct();
    $this->tableName = "pizza";
    $this->_tblChaves = ["pizza_id" => ""];
  }
  public static function getListagemPizza()
  {
    $sql ="select pizza_id codigo_pizza, nome nome_pizza, valor valor_pizza
          from pizza
          order by pizza_id";
          $obj = new static();
          return $obj -> conn ->prepare($sql);
        }
}