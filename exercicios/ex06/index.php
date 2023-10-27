<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="style.css">

    <title>Exercicio PHP</title>
</head>
<body>
    <?php 
    // Capturando os dados do Formulario Retroalimentado
    $valor1 = $_GET['valor1'] ?? null;
    $valor2 = $_GET['valor2'] ?? null;
    $soma = $valor1 + $valor2;
    ?>

    <main>
        <h1>Somador de Valores</h1>

        <!-- form com action retroalimentado -->
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="v1">Valor 1</label>
            <input type="number" name="valor1" id="v1" value="<?=$valor1?>" required>

            <label for="v2">Valor 2</label>
            <input type="number" name="valor2" id="v2" value="<?=$valor2?>" required>

            <input type="submit" value="Somar">
        </form>

        <div id="resul">
            <?php
            if ($valor1 != null) {
                print "
                    <h2 style=\"margin-top: 20px;\">Resultado da Soma</h2>
                    <p>A soma entre os valores $valor1 e $valor2 é <strong>igual a $soma</strong>.</p>
                ";
            }
            ?>
        </div>
    </main>  

    
</body>
</html>