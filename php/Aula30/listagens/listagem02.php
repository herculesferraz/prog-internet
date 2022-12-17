<?php

use Classes\Cliente;

  require_once(__DIR__ . "/../common/cabecalho.php");
  //Aqui colocarei o corpo se precisar
  $stmt = Cliente::getListagemCliente();
  $result = $stmt->execute();
?>
  <div class="conteudo">
    <table class="table table-striped table-hover">
      <thead>
        <tr>
          <th>Código do Cliente</th>
          <th>Nome do Cliente</th>
          <th>Telefone do Cliente</th>
          <th>Endereço do Cliente</th>
          <th>Cidade do Cliente</th>
          <th>UF Cliente</th>
        </tr>
      </thead>
      <tbody>
<?php
  if ($result){
    while($cliente = $stmt->fetch(PDO::FETCH_OBJ)){
      echo "<tr>";
      echo "  <td>". $cliente->codigo_cliente. "</td>";
      echo "  <td>".$cliente->nome_cliente."</td>";
      echo "  <td>".$cliente->telefone_cliente."</td>";
      echo "  <td>".$cliente->endereco_cliente."</td>";
      echo "  <td>".$cliente->cidade_cliente."</td>";
      echo "  <td>".$cliente->uf_cliente."</td>";
      echo "</tr>";
    }
  }
?>
      </tbody>
    </table>
  </div>
<?php
  require_once(__DIR__ . "/../common/rodape.php");