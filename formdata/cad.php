<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Resultado</title>
</head>
<body>
    <header>
        <h1>Resultado do Processamento</h1>
    </header>
    
    <main>
        <?php 
            //var_dump($_REQUEST);

            $nome = $_GET["nome"] ?: "SEM NOME";
            $sobrenome = $_GET["sobrenome"] ?: "DESCONHECIDO";

            echo "Meu nome é $nome $sobrenome";       
        
        ?>

       
    </main>
    <a href="javascript:history.go(-1)">Voltar a página anterior</a>



</body>
</html>