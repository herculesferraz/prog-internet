<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exercício 02 - Aula 22</title>
  <link rel="stylesheet" href="assets/css/estilo.css">
</head>

<body>
  <section id="formulario">
    <form action="#" method="post">
      <table>
        <tr>
          <td><label for="idVlr01">Valor 1:</label></td>
          <td><input type="number" name="vlr01" id="idVlr01"></td>
        </tr>
        <tr>
          <td><label for="idVlr02">Valor 2:</label></td>
          <td><input type="number" name="vlr02" id="idVlr02"></td>
        </tr>
        <tr>
          <td colspan="2">
            <input type="checkbox" name="soma" id="idSoma" value="on">
            <label for="idSoma">Soma</label>
            <input type="checkbox" name="subtracao" id="idSubtracao" value="on">
            <label for="idSubtracao">Subtração</label>
            <input type="checkbox" name="divisao" id="idDivisao" value="on">
            <label for="idDivisao">Divisão</label>
            <input type="checkbox" name="multiplicacao" id="idMultiplicacao" value="on">
            <label for="idMultiplicacao">Multiplicação</label>
            <input type="checkbox" name="resto" id="idResto" value="on">
            <label for="idResto">Resto Divisão</label>
            <input type="checkbox" name="combinacao" id="idCombinacao" value="on">
            <label for="idCombinacao">Combinação Ca,b</label>
          </td>
        </tr>
        <tr>
          <td colspan="2" class="txtCenter">
            <input type="submit" value="Enviar"> &nbsp;
            <input type="reset" value="Limpar">
          </td>
        </tr>
      </table>
    </form>
  </section>
  <section id="resposta">
    <div class="txtCenter">
      <?php if ($_POST) : ?>
        A(s) resposta(s): <br><?= calculaResposta($_POST) ?>
      <?php endif; ?>
    </div>
  </section>
</body>

</html>
<?php
function calculaResposta($param){
  $ret = "Para os valores de vlr1=${param["vlr01"]} e vlr2=${param["vlr02"]}, teremos:<br>";
  /*
	aqui montaremos o retorno
  */
  if (isset($param["soma"]) && $param["soma"]=="on")
    $ret .= "A soma é ". ($param["vlr01"] + $param["vlr02"]). "<br>";
  if (isset($param["subtracao"]) && $param["subtracao"]=="on")
    $ret .= "A Subtração é ". ($param["vlr01"] - $param["vlr02"]). "<br>";
  if (isset($param["multiplicacao"]) && $param["multiplicacao"]=="on")
    $ret .= "A Multiplicação é ". ($param["vlr01"] * $param["vlr02"]). "<br>";
  if (isset($param["divisao"]) && $param["divisao"]=="on")
    $ret .= "A Divisão é ". ($param["vlr01"] / $param["vlr02"]). "<br>";
  if (isset($param["resto"]) && $param["resto"]=="on")
    $ret .= "O Resto é ". ($param["vlr01"] % $param["vlr02"]). "<br>";
  if (isset($param["combinacao"]) && $param["combinacao"]=="on")
    $ret .= "A Combinação é ". ( fat($param["vlr01"]) /  
                  ( fat($param["vlr02"]) * 
                  fat($param["vlr01"] - $param["vlr02"] ) ) ). "<br>";
  return $ret;
}
function fat($vlr){
  $ret = 1;
  /*
	Aqui faremos a função de fatorial
  */
  for($i=$vlr;$i>1;$i--)
    $ret *= $i;
    

  return $ret;
}
