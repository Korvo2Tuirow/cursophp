<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Salário Minimo</title>
</head>

<body>

    <?php
    $salario = $_REQUEST['salario'] ?? 0;
    $salarioMinimo = 1320;
    $real = numfmt_create("pt-BR", NumberFormatter::CURRENCY);
    ?>


    <main>

        <h1>Informe seu salário</h1>
        <div id="principal">
            <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
                <label for="salario">Salário (R$)</label>
                <input type="number" min="0" name="salario" id="salario" step="0.01" value="<?= $salario ?>">
                <p>
                    <?php

                    echo "Considerando o salário minimo de <strong>" . numfmt_format_currency($real, $salarioMinimo, "BRL") .
                        "</strong>";
                    ?>

                </p>
                <input type="submit" value="Analisar">
            </form>
        </div>

    </main>

    <div id="estrutura">

        <h2>Resultado Final</h2>
        <div id="resp">
            <?php

            $qtSalario = (int)($salario / $salarioMinimo);
            $sobra =   $salario - ($salarioMinimo * $qtSalario);


            echo "<p>Quem recebe um salário de " . numfmt_format_currency($real, $salario, "BRL") . " ganha<strong> " . $qtSalario . " salários minimos</strong> + " . numfmt_format_currency($real, $sobra, "BRL") . ". </p>";

            ?>
        </div>
    </div>
</body>




</html>