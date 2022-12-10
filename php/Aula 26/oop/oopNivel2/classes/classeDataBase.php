<?php
namespace Classes;

class Database {
  private $conn;
  private $host;
  private $porta;
  private $nomeBaseDados;
  private $userName;
  private $password;

  public function __construct($pSenha="Sen@i2021*", $pUserName="root", 
                              $pNomeBanco = "proginter_2022_a",
                              $pPorta = 3306, $pHost="localhost" )
  {
    $this->host = $pHost;
    $this->porta = $pPorta;
    $this->nomeBaseDados = $pNomeBanco;
    $this->userName = $pUserName;
    $this->password = $pSenha;
    //Abrindo o banco de dados
    try {
      $this->conn = new \PDO("mysql:host=".$this->host.";".
                             "port=".$this->porta.";".
                             "dbname=".$this->nomeBaseDados,
                            $this->userName,
                            $this->password);
      $this->conn->setAttribute(\PDO::ATTR_ERRMODE,\PDO::ERRMODE_EXCEPTION);
    } catch(\PDOException $e){
      echo "Falha de conexão:" . $e->getMessage();
    }
  }

  
}