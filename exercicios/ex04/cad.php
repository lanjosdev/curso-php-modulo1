<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
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
        $name = $_GET['nome'] ?? "sem nome";
        $sname = $_GET['sobrenome'] ?? "desconhecido";

        echo "<p>É um prazer te conhecer, <strong>$name $sname</strong>!</p>";
        ?>

        <div>
            <a href="javascript:history.go(-1)">Voltar para a página anterior</a>
        </div>
    </main>
</body>
</html>