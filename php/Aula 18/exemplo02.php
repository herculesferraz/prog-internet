<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo PHP</title>
</head>

<body>
    <p>Nesse trecho de codigo iremos abordar um exemplo
        de mesclagem de html e php
    </p>
    <?php
    $flag = false
    ?>
    <p>Logo abaixo iremos mudar conforme o contuudo da
        variavel flag
    </p>
    <?php
        if ($flag) {
    ?>
    <p>Esse texto só vai aprarecer se o flag estiver como true </p>
    <?php
        } else  {
    ?>
    <p>Esse texo só vai aparecer se o flag estiver como false</p>
    <?php
        }
    ?>
</body>

</html>
