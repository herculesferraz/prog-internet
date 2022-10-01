<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 01</title>
</head>

<body>
    <form action="#">
        <fieldset>
            <!-- Exercicio 01 -->
            <h1>Digite seu nome</h1>
            <input type="text" name="nome" id="nome">
            <input type="submit" value="Enviar">
            <?= $_REQUEST["nome"] ?>
            <div></div>
        </fieldset>
        <!-- Exercicio 02 -->
        <fieldset>
            <h1>Valor do produto</h1>
            <p>O valor do produto de 43*28 é: <?= 28 * 43 ?></p>
        </fieldset>
        <!-- Exercicio 3 -->
        <fieldset>
            <h1>Media</h1>
            <p>A media entre 7-8-9 é: <?= (7 + 8 + 9) / 3 ?> </p>
        </fieldset>
        <!-- Exercicio 04 -->
        <fieldset>
            <h1>Sucessoe e Antecessor</h1>
            <input type="text" name="num1" id="num1" value="0">
            <input type="submit" value="Calcular">
            <p>O Sucessor de <?= $_REQUEST["num1"] ?> é: <?= $_REQUEST["num1"] + 1; ?></p>
            <p>O Antecessor de <?= $_REQUEST["num1"] ?> é: <?= $_REQUEST["num1"] - 1; ?></p>
        </fieldset>
    </form>
</body>

</html>