<?php

namespace Classes;

class Cliente extends Database {
  public function __construct()
  {
    parent::__construct();
    $this->tableName = "cliente";
    $this->_tblChaves = ["cliente_id" => ""];
  }
}