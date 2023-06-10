

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>CONVERSOR DE MOEDAS</title>
</head>
<body>
    <div class="php">
        <h1>CONVERSOR DE MOEDAS</h1>
        <?php
            $cotacao = 5.17;
            $real = $_REQUEST["valor"] ?:0;
            $dolar = $real/$cotacao;
            $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
            echo "Seus " . numfmt_format_currency($padrao, $real, "BRL") . " reais equivalem a " . numfmt_format_currency($padrao, $dolar, "USD")." dolares. <br><br>";
            echo "O valor da cotação esta em US$ $cotacao dolares.";

            
        
        
        
        ?>
        <button onclick="javascript:history.go(-1)">VOLTAR</button>
    </div>
    
</body>
</html> 