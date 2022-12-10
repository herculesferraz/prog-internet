<?php
  require_once(__DIR__ . "/../common/cabecalho.php");
  require_once(__DIR__ . "/../common/conexaobd.php");
  //Aqui colocarei o corpo se precisar
  $sql ="select pizza_id codigo_pizza, nome nome_pizza, valor valor_pizza
  from pizza
  order by pizza_id";
  $stmt = $conn->prepare($sql);
  $result = $stmt->execute();
?>
  <div class="conteudo">
    <table class="table table-striped table-hover">
      <thead>
        <tr>
          <th>Código da Pizza</th>
          <th>Nome da Pizza</th>
          <th>Valor da Pizza</th>
        </tr>
      </thead>
      <tbody>
<?php
  if ($result){
    while($pizzas = $stmt->fetch(PDO::FETCH_OBJ)){
      echo "<tr>";
      echo "  <td>". $pizzas->codigo_pizza. "</td>";
      echo "  <td>".$pizzas->nome_pizza."</td>";
      echo "  <td>".number_format($pizzas->valor_pizza,2,",",".")."</td>";
      echo "</tr>";
    }
  }
?>
      </tbody>
    </table>
  </div>
<?php
  require_once(__DIR__ . "/../common/rodape.php");