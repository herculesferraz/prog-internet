<?php

namespace Classes;

class User extends Database {
  public function __construct()
  {
    parent::__construct();
    $this->tableName = "users";
    $this->_tblChaves = ["email" => ""];
  }
  public static function login($email, $senha)
  {
    $obj = static::findByPk([$email]);
    $ret = false;
    if($obj){
      $ret = password_verify($senha, $obj->senha);
    }  
      return $ret;
  }
}