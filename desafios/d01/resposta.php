<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="style.css">

    <title>Desafio PHP - 01</title>
</head>

<body>
    <main>
        <h1>Resultado Final</h1>

        <?php 
        $num = $_GET["num"] ?? 0;
        $ante = $num - 1;
        $sucessor = $num + 1;

        echo "<p>O número escolhido foi <strong>$num</strong></p>";
        echo "<p>O seu <em>antecessor</em> é $ante</p>";
        echo "<p>O seu <em>sucessor</em> é $sucessor</p>";
        ?>

        
        <a href="./index.html" style="background-color: transparent; border-bottom:none"><button>&#x2B05; Voltar</button></a>
        
    </main>
</body>
</html>