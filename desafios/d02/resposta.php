<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="style.css">

    <title>Desafio PHP - 02</title>
</head>

<body>
    <main>
        <h1>Trabalhando com números aleatórios</h1>

        <?php 
        $min = 0;
        $max = 100;
        $numSorteado = mt_rand($min, $max);

        echo "<p>Gerando um número entre $min e $max... <br> O valor gerado foi <strong>$numSorteado</strong></p>";
        ?>
        
        <button onclick="document.location.reload()">&#x1f504; Gerar outro</button>
        
    </main>
</body>
</html>