<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>


    <?php
    $dividendo = $_REQUEST['dividendo'] ?? 0;
    $divisor = $_REQUEST['divisor'] ?? 0;

    $resultado = (int) ($dividendo / $divisor);
    $resto = $dividendo % $divisor;
    ?>

    <main>

        <h1>Anatomia da Divisão</h1>
        <div id="anatomia">
            <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
                <label for="dividendo">Dividendo</label>
                <input type="number" name="dividendo" id="dividendo" value="<?= $dividendo ?>">
                <label for="divisor">Divisor</label>
                <input type="number" name="divisor" id="divisor" value="<?= $divisor ?>">
                <input type="submit" value="Analisar">
            </form>
        </div>

         </main>

          <div id="estrutura">

            <h2>Estrutura da Divisão</h2>
            <div id="resp">
                <div id="q1">
                    <div id="numDividendo">
                        <?= $dividendo ?>
                    </div>

                    <div id="numDivisor">
                        <?= $divisor ?>
                    </div>
                </div>

                <div id="q2">
                    <div id="resto">
                        <?= $resto ?>
                    </div>
                    <div id="resultado">
                        <?= $resultado ?>
                    </div>
                </div>
            </div>
        </div>
</body>

</html>