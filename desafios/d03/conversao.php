<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="style.css">

    <title>Desafio PHP - 03</title>
</head>

<body>
    <main>
        <h1>Conversor de Moedas v1.0</h1>

        
        <?php 
        $real = $_GET["valor"] ?? 0;
        $cotacao = 5; // valor do dolar hoje
        $convertido = $real / $cotacao;

        $padrao = numfmt_create("pt-BR", NumberFormatter::CURRENCY);


        echo "<p>Seus " . numfmt_format_currency($padrao, $real, "BRL") . " equivalem a <strong>" . numfmt_format_currency($padrao, $convertido, "USD") . "</strong></p>";

        echo "<small><strong>*Cotação fixa de R$" . number_format($cotacao, 2, ",", ".") . "</strong> informada diretamente no código.</small>"
        ?>

        
        <a href="./index.html" style="background-color: transparent; border-bottom:none"><button>&#x2B05; Voltar</button></a>
        
    </main>
</body>
</html>