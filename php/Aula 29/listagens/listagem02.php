<?php
  require_once(__DIR__ . "/../common/cabecalho.php");
  require_once(__DIR__ . "/../common/conexaobd.php");
  //Aqui colocarei o corpo se precisar
  $sql ="select cliente_id as codigo_cliente, 
                      nome as nome_cliente,
                      telefone as telefone_cliente, 
  concat(logradouro, ' - ', numero) as endereco_cliente,
  cidade as cidade_cliente, uf as uf_cliente
from cliente
where uf in ('PA','MT','CE','MA')
order by uf, cidade, nome";
  $stmt = $conn->prepare($sql);
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