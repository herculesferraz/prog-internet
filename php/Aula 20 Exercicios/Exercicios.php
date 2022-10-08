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
            <h1>1- Digite seu nome</h1>
            <input type="text" name="nome" id="nome">
            <input type="submit" value="Enviar">
            <?= $_REQUEST["nome"] ?>
            <div></div>
        </fieldset>
        <!-- Exercicio 02 -->
        <fieldset>
            <h1>2- Valor do produto</h1>
            <p>O valor do produto de 43*28 é: <?= 28 * 43 ?></p>
        </fieldset>
        <!-- Exercicio 3 -->
        <fieldset>
            <h1>3- Media</h1>
            <p>A media entre 7-8-9 é: <?= (7 + 8 + 9) / 3 ?> </p>
        </fieldset>
        <!-- Exercicio 04 -->
        <fieldset>
            <h1>4- Sucessor e Antecessor</h1>
            <input type="text" name="num1" id="num1" value="0">
            <input type="submit" value="Calcular">
            <p>O Sucessor de <?= $_REQUEST["num1"] ?> é: <?= $_REQUEST["num1"] + 1; ?></p>
            <p>O Antecessor de <?= $_REQUEST["num1"] ?> é: <?= $_REQUEST["num1"] - 1; ?></p>
        </fieldset>
        <!-- Exercicio 05 -->
        <fieldset>
            <h1>5- Soma de numeros inteiros</h1>
            <input type="text" name="vlr1" id="vlr1" value="0">
            <input type="text" name="vlr2" id="vlr2" value="0">
            <input type="submit" value="Enviar">
            <?= $_REQUEST["vlr1"] + $_REQUEST["vlr2"]; ?>
        </fieldset>
        <!-- Exercicio 6 -->
        <fieldset>
            <h1>6- Terça parte de um numero</h1>
            <input type="text" name="vlr3" id="vlr3" value="0">
            <input type="submit" value="Enviar">
            <?= round($_REQUEST["vlr3"] / 3, 2); ?>
        </fieldset>
        <!-- Exercicio 07 -->
        <fieldset>
            <h1>7- Divisor, Dividendo, Cociente, Resto</h1>
            <input type="text" name="divisor" id="divisor" value="3">
            <input type="text" name="dividendo" id="dividendo" value="3">
            <input type="submit" value="Enviar">
            <p>O divisor é:</p>
            <?= $_REQUEST["divisor"] ?>
            <p>O dividendo é:</p>
            <?= $_REQUEST["dividendo"] ?>
            <p>O cocinete é:</p>
            <?php
            echo round($_REQUEST["divisor"] / $_REQUEST["dividendo"], 2);
            ?>
            <p>O resto é:</p>
            <?php
            echo round($_REQUEST["divisor"] % $_REQUEST["dividendo"], 2);
            ?>
        </fieldset>
        <!-- Exercicio 08 -->
        <fieldset>
            <h1>8- Invertendo</h1>
            <p>Tendo o valor <?= $vlr1 = 123 ?>.</p>
            <?php
            $c = intdiv($vlr1, 100);
            $d = intdiv($vlr1 % 100, 10);
            $u = $vlr1 % 10;
            $resp = $u * 100 + $d * 10 + $c;
            ?>
            <p>O valor invertido é <?= $resp ?>.</p>
            <p>O valor invertido é <?= strrev($vlr1) ?>.</p>
        </fieldset>
        <!-- Exerciocio 9 -->
        <fieldset>
            <h1>9- Numeros entre 10-100 c/ condiçoes</h1>
            <p>
                <?php
                $traco = "";
                for ($vlr = 11; $vlr <= 99; $vlr++) {
                    $d = intdiv($vlr, 10);
                    if ($vlr % 10 != 0 && $vlr % $d == 0) {
                        echo $traco. $vlr;
                        $traco ="-";
                    }
                }
                ?>
            </p>
        </fieldset>
          <!-- Exerciocio 10 -->
          <fieldset>
            <h1>10- numero aleatorio 20</h1>
            <p>
                <?php
                $traco = "";
                for ($vlr = 0; $vlr <= 20; $vlr++) {
                    $numero = rand(0,20);
                    if ($numero ** 2 < 225) {
                        echo $traco. $numero;
                        $traco ="-";
                    }
                }
                ?>
            </p>
        </fieldset>
    </form>
</body>

</html>