<?php

namespace Classes;

class User extends Database {
  public function __construct()
  {
    parent::__construct();
    $this->tableName = "users";
    $this->_tblChaves = ["email" => ""];
  }
}