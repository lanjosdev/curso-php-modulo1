<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="style.css">

    <title>Desafio PHP - 05</title>
</head>

<body>
    <main>
        <h1>Analisador de Número Real</h1>

        
        <?php 
        $num = $_GET["num"] ?? 0;
        $numInt = number_format($num, 0, ",", ".");
        $numDec = number_format($num - floor($num), 3, ",", ".");

        
        echo "<p>Analisando o número <strong>" . number_format($num, 3, ",", ".") ."</strong> informado pelo usuário:</p>";

        echo "<ul>
            <li>A parte inteira do número é <strong>$numInt</strong></li>
            <li>A parte fracionária do número é <strong>$numDec</strong></li>
        </ul>";
        ?>

        
        <a href="./index.html" style="background-color: transparent; border-bottom:none"><button>&#x2B05; Voltar</button></a>
        
    </main>
</body>
</html>