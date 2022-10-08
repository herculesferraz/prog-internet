<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="#">
        <fieldset>
            <label for="Nome">Nome</label>
            <input type="text" name="nome" id="nome">
            <p></p>
            <label for="Senha">Senha</label>
            <input type="password" name="senha" id="senha">
            <input type="submit" value="Enviar">
            <p></p>
            <?= $_SERVER['REMOTE_ADDR'] ?>
            <?= date("d-m-Y H:i:s") ?>
        </fieldset>
    </form>
</body>

</html>