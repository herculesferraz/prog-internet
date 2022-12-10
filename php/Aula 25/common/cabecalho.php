<?php
  if (!defined("URL_BASE")) define("URL_BASE","/Aula 25/");
?>
<!DOCTYPE html>
<html lang="pt-br" manifest="<?=URL_BASE?>common/manifest.appcache">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exemplos de uso do PHP com PDO</title>
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <link rel="stylesheet" href="<?=URL_BASE?>assets/css/estilo.css">
</head>
<body>
  <header class="p-3 text-bg-dark">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
          <li><a href="<?=URL_BASE?>index.php" class="nav-link px-2 text-secondary">Home</a></li>
          <!-- Menu Cadastros -->
          <li class="dropdown">
            <a href="#" class="nav-link px-2 text-white dropdown-toggle" data-bs-toggle="dropdown" href="#" 
              role="button" aria-expanded="false">Cadastros</a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="<?=URL_BASE?>cadastros/cadastro01.php">Clientes</a></li>
                <li><a class="dropdown-item" href="<?=URL_BASE?>cadastros/cadastro02.php">Usuários</a></li>
                <li><a class="dropdown-item" href="<?=URL_BASE?>cadastros/cadastro03.php">Pizzas</a></li>
                <li><a class="dropdown-item" href="<?=URL_BASE?>cadastros/cadastro04.php">Pedidos</a></li>
              </ul>
          </li>
          <!-- Menu Listagens -->
          <li>
            <a href="#" class="nav-link px-2 text-white dropdown-toggle" data-bs-toggle="dropdown" href="#" 
                        role="button" aria-expanded="false">Listagens</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="<?=URL_BASE?>listagens/listagem01.php">Listagem de Pizzas</a></li>
              <li><a class="dropdown-item" href="<?=URL_BASE?>listagens/listagem02.php">Listagem de Clientes</a></li>
              <li><a class="dropdown-item" href="<?=URL_BASE?>listagens/listagem03.php">Listagem de Pedidos</a></li>
              <li><a class="dropdown-item" href="<?=URL_BASE?>listagens/listagem04.php">Listagem de Itens vendidos</a></li>
            </ul>
          </li>
        </ul>

        <div class="text-end">
          <button type="button" class="btn btn-outline-light me-2" onclick="location.href='<?=URL_BASE?>login.php'" >Login</button>
          <button type="button" class="btn btn-warning" onclick="location.href='<?=URL_BASE?>register.php'">Sign-up</button>
        </div>
      </div>
    </div>
  </header>
  <section id="corpo">