<?php

namespace Classes;

class Pedido extends Database {
  public function __construct()
  {
    parent::__construct();
    $this->tableName = "pedido";
    $this->_tblChaves = ["pedido_id" => ""];
  }
}