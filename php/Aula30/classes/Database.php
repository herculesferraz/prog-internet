<?php

namespace Classes;

use Exception;
use PDO;
use PDOException;

class Database {
  protected $conn; //Variável de conexão com banco de dados.
  protected $stmt; //Variável de instrução SQL
  protected $tableName; //Variável que vai conter o nome da tabela.
  protected $_tblCampos; //Matriz que vai conter os campos e valores deles.
  protected $_tblChaves; //Matriz que vai conter os campos chave e valores.
  protected $ultErro;

  public function __construct()
  {
    //mysql:host=localhost;port=3306;dbname=proginter_2022_a
    $strConn = DB_DRIVER . ":host=" . DB_HOST. ";port=" . DB_PORT.
              ";dbname=" . DB_NAME;
    try {
      $this->conn = new PDO($strConn,DB_USER,DB_PASS);
      $this->conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    }catch(PDOException $e){
      $msg = "Ocorreu um erro ao conectar. Erro: " . $e->getMessage();
      echo $msg;
      $this->ultErro = $msg;
    }
  }

  public function getLastError(){
    return $this->ultErro;
  }
  //Iremos passar os dados dessa forma:
    // ["campo_tabela" => "valor para o campo",
    // "campo2_tabela" => "valor para o campo"]
  public static function create($dados)
  {
    //Estou criando o objeto base ou classe filha
    $ret = new static();
    //insert into pizza(nome,descricao,valor) values (:nome,:descricao,:valor)
    $campos = implode(",",array_keys($dados));
    $campos2 = ":".implode(",:",array_keys($dados));
    $sql = "insert into " . $ret->tableName."($campos) values($campos2)";
    //Inserir no banco de dados
    var_dump($sql);
    var_dump($dados);
    try{
      $ret->stmt = $ret->conn->prepare($sql);
      $ret->stmt->execute($dados);
      //Para obter o último id inserido
      foreach($ret->_tblChaves as $key => $vlr){
        if (!array_key_exists($key, $dados)){
          $ret->_tblChaves[$key] = $ret->conn->lastInsertId();
        } else {
          $ret->_tblChaves[$key] = $dados[$key];
        }
      }
      $procura=array_values($ret->_tblChaves);
      $ret = static::findByPk($procura);
      return $ret;
    }catch(PDOException $e){
      $msg = "Ocorreu um erro ao inserir. Erro: ". $e->getMessage();
      echo $msg;
      $ret->ultErro = $msg;
    }
  }
  /**
   * Método estático que irá buscar na tabela através dos campos chave
   * utilizando os valores informados para trazer os registros
   * @param array $valores Passaremos os valores para a(s) chave(s) primária(s)
   * @return object Retorna o objeto da linhagem de database com os dados populados
   */
  public static function findByPk($valores){
    $ret = new static();
    $sql = "select * from " . $ret->tableName . " where ";
    $flg = true;
    $data = []; 
    $i=0;
    foreach($ret->_tblChaves as $key => $vlr){
      //select * from pedido_item where pedido_id = :pedido_id and item_id=:item_id
      $sql .= (!$flg ? " and " : "") . "$key = :${key}";
      $flg = false;
      $data[$key] = $valores[$i];
      $i++;
    }
    echo $sql;
    try{
      $ret->stmt = $ret->conn->prepare($sql);
      $ret->stmt->execute($data);
      $ret->parseData();

      var_dump($ret->_tblCampos);
    }catch(PDOException $e){
      $msg = "Ocorreu um erro ao selecionar. Erro: " . $e->getMessage();
      echo $msg;
      $ret->ultErro = $msg;
    }
    return $ret;
  }

  protected function parseData(){
    $dados = $this->stmt->fetch(PDO::FETCH_OBJ);
    $this->_tblCampos=[];
    foreach($dados as $key => $vlr){
      $this->_tblCampos[$key]=$vlr;
      //Atribuindo o valor da chave para saber de qual chave estamos alterando/
      //Apagando
      if (array_key_exists($key,$this->_tblChaves))
        $this->_tblChaves[$key]=$vlr;
    }
  }

  public function save(){
    $sql = "update " . $this->tableName . " set ";
    $flg = false;
    $data = [];
    foreach($this->_tblCampos as $key => $vlr){
      $sql .= ($flg ? ", ": "") . " $key = :$key ";
      $flg = true;
      $data[$key]=$vlr; //montando o vetor para usar no update
    }
    $sql .= "where ";
    
    $flg = false;
    foreach($this->_tblChaves as $key => $vlr){
      $sql .= ($flg ? " and ": "") . " $key = :old_$key ";
      $flg = true;
      $data["old_".$key]=$vlr;//complementando o vetor com as chaves
    }
    echo $sql;
    try{
      $this->stmt = $this->conn->prepare($sql);
      $this->stmt->execute($data);

      var_dump($data);
    }catch(PDOException $e){
      $msg = "Ocorreu um erro ao atualizar os dados. Erro: " . $e->getMessage();
      echo $msg;
      $this->ultErro = $msg;
    }

  }

  public function destroy(){
    $sql = "delete from " . $this->tableName;
    $flg = false;
    $data = [];
    $sql .= " where ";
    
    foreach($this->_tblChaves as $key => $vlr){
      $sql .= ($flg ? " and ": "") . " $key = :old_$key ";
      $flg = true;
      $data["old_".$key]=$vlr;//complementando o vetor com as chaves
    }
    echo $sql;
    try{
      $this->stmt = $this->conn->prepare($sql);
      $this->stmt->execute($data);
      echo "\nMostrando o que usei para enviar para o delete\n.";
      var_dump($data);
    }catch(PDOException $e){
      $msg = "Ocorreu um erro ao apagar os dados. Erro: " . $e->getMessage();
      echo $msg;
      $this->ultErro = $msg;
    }

  }

  public function __get($name)
  {
    if (str_starts_with($name,"old_") && 
        array_key_exists(substr($name,4),$this->_tblChaves))
      return $this->_tblChaves[substr($name,4)];
    if (array_key_exists($name,$this->_tblCampos))
      return $this->_tblCampos[$name];
    throw new Exception("Propriedade inexistente!");
  }

  public function __set($name, $value)
  {
    if (str_starts_with($name,"old_") && 
        array_key_exists(substr($name,4),$this->_tblChaves)){
      $this->_tblChaves[substr($name,4)] = $value;
      return true;
    }
    if (array_key_exists($name,$this->_tblCampos)){
      $this->_tblCampos[$name] = $value;
      return true;
    }
    throw new Exception("Propriedade inexistente!");
  }
}