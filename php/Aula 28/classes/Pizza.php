<?php

namespace Classes;

class Pizza extends Database {
  public function __construct()
  {
    parent::__construct();
    $this->tableName = "pizza";
    $this->_tblChaves = ["pizza_id" => ""];
  }
}