<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Calculador de Raízes</title>
</head>

<body>

    <?php
    $numero = $_REQUEST['numero'] ?? 0;

    ?>


    <main>

        <h1>Informe um número</h1>
        <div id="principal">
            <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
                <label for="numero">Número</label>
                <input type="number" min="0" name="numero" id="numero" value="<?= $numero ?>">

                <input type="submit" value="Calcular Raízes">
            </form>
        </div>

    </main>

    <div id="estrutura">

        <h2>Resultado Final</h2>
        <div id="resp">
            <?= "<p>Analizando o <strong>número $numero</strong>, temos:</p>"; ?>
            <ul>
                <li>
                    <?php
                    $rQuadrada = sqrt($numero);
                    echo "A sua raiz quadrada é <strong>" . number_format($rQuadrada, 3, ",") . "</strong>";
                    ?>
                </li>
                <li>
                    <?php
                    $rCubica = ($numero) ** (1 / 3);
                    echo "A sua raiz cúbica é <strong>" . number_format($rCubica, 3, ",") . "</strong>";
                    ?>
                </li>
            </ul>
        </div>
    </div>
</body>

</html>