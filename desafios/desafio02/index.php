<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Desafio Curso em video 02</title>
</head>
<body>
    <main>
    <h1>Trabalhando com números aleatórios</h1>
    <hr>
    <p>Gerando um número aleatório de 0 a 100</p>
    <?php 
        $num = rand(100, 0);
        echo "O valor gerado foi: $num";
    ?>
 <button onclick="javascript:document.location.reload()">&#x1F504 Gerar</button>




    </main>
    
</body>
</html>