<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de teste</title>
</head>
<body>
    <form action="#">
        <label for="codigo">Digite o código:</label>
        <input type="number" name="codigo" id="codigo" required>
        <input type="submit" value="Enviar">
    </form>
<?php
  if ($_REQUEST){
    echo "<p>Recebi os dados</p>";
    $base=2; $soma=0;
    for($i=strlen($_REQUEST["codigo"])-1;$i>=0;$i--){
        $soma += substr($_REQUEST["codigo"],$i,1) * $base;
        $base++;
    }
    echo "Número informado é " . $_REQUEST["codigo"]."<br>";
    echo "Soma = $soma<br>";
    $digito = 11 - $soma % 11;
    if ($digito>9) $digito = 0;
    echo "Digito = $digito <br>";
    echo "Dígito final é " . substr($_REQUEST["codigo"],-1)."<br>";
    if($digito==substr($_REQUEST["codigo"],-1)){
        echo "Digito válido!";
    } else {
        echo "Digito é inválido!";
    }
  }
    
?>
</body>
</html>