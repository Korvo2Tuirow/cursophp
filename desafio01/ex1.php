<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Desafio 01</title>
</head>
<body>
    <section id="resultado">
    <h1>Resultado Final</h1>
    <hr>
    <?php
    
    $number = $_REQUEST["number"];
    $ant = $number-1;
    $suc = $number+1;
  
    echo "<p>O número escolhido foi <strong>$number</strong></p>"; 

    echo "<p>O seu antecessor é <strong>$ant</strong></p>";  

    echo "<p>O seu sucessor é <strong>$suc</strong><p>";
    
    ?>

    </section>

    <div id="back"><a href="javascript:history.go(-1)">VOLTAR</a></div>
    
</body>
</html>