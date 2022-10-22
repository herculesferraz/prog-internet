<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <form action="#" method="POST">
        <fieldset>
            <div id="margemLogin">
            <label for="Nome">Nome</label>
            <input type="text" name="nome" id="nome" required>
            <p></p>
            <label for="Senha">Senha</label>
            <input type="password" name="senha" id="senha" required>
            <input type="submit" value="Enviar">
            <input type="reset" value="Limpar">
            <?php if($_POST):?>
                <p>
                    Seu login é: 
                    <?=$_POST["nome"] ?><br>
                    Sua senha é:
                    <?=$_POST["senha"] ?>
                    <?php endif; ?>
                </p>
            </div>
            <section id="margem">
            <label for="ip">Seu IP: </label><?= $_SERVER['REMOTE_ADDR'] ?>
            <div></div>
            <label for="dh">Data e Hora: </label><?= date("d-m-Y H:i:s") ?>
            </section>
        </fieldset>
    </form>
</body>

</html>