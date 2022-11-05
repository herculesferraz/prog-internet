<?php
  // Inicializando as variáveis de conexão
  $bd_host = "localhost";
  $bd_port = 3306;
  $bd_name = "proginter_2022_a";
  $bd_user = "root";
  $bd_pass = "Sen@i2021*";
  //Levantando uma instância do objeto de conexão com o banco de dados.
  try {
    $conn = new PDO("mysql:host=$bd_host;port=$bd_port;dbname=$bd_name",
                    $bd_user,$bd_pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
  } catch(PDOException $e){
    echo "Falha de conexão:" . $e->getMessage();
  }
