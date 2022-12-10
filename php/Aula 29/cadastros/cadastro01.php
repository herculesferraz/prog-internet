<?php
  require_once(__DIR__ . "/../common/cabecalho.php");
  //Aqui colocarei o corpo se precisar
?>
<div class="conteudo">
    <h2>Cadastrar Cliente</h2>
    <form action="cadastro01_conf.php" method="post">
      
      <!-- Botões de confirmação e limpeza -->
      <div class="row">
        <div class="col-md-6">
          <button type="submit" class="btn btn-success">Enviar</button>
        </div>
        <div class="col-md-6">
          <button type="reset" class="btn btn-danger">Limpar</button>
        </div>
      </div>
    </form>
  </div>

<?php
  require_once(__DIR__ . "/../common/rodape.php");