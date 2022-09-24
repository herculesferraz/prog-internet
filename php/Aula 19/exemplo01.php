<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Primeiro exemplo de HTML com PHP</title>
</head>
<body>
    <h1>Vamos começar a rodar um PHP</h1>
    <?php
        $teste = true;
    ?>
    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Consectetur laborum officia eos esse magni iure quis quo mollitia earum debitis ex saepe, voluptatibus nemo aspernatur, fugiat atque, nobis iste rem!</p>
    <?php if ($teste): ?>
        <div>
            <p>Só vou aparecer se o teste for verdadeiro!</p>
        </div>
        <?php else: ?>
        <div>
            <p>Só vou aparecer se o teste for falso!</p>
        </div>
        <?php endif; ?>
        <?php
        if ($teste){
            echo "<div>
            <p>Só vou aparecer se o teste for verdadeiro!</p>
        </div>";
        }else{
            echo "<div>
            <p>Só vou aparecer se o teste for falso!</p>
        </div>";
        } ?>
</body>
</html>