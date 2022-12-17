<?php

use Classes\Pizza;

  require_once(__DIR__ . "/../common/cabecalho.php");
  //Aqui colocarei o corpo se precisar
  $stmt = Pizza::getListagemPizza();
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