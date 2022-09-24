<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="#" method="post">
        <div>
            <label for="idnome">Digite seu nome</label>
            <input type="text" name="nome" id="nome">
        </div>
        <input type="submit" value="Enviar">
        &nbsp;
        <input type="reset" value="Limpar">
    </form>
    <?php
    date_default_timezone_set('America/Sao_Paulo');
    if ($_POST){
        echo "<hr>";
        echo date("d-n-Y H:i:s")."". $_REQUEST["nome"];
    } ?>
</body>
</html>