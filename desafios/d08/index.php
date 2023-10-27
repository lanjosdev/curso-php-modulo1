<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="style.css">

    <title>Desafio PHP - 08</title>
</head>
<body>
    <?php 
    // Capturando os dados do Formulario Retroalimentado
    $num = $_GET['num'] ?? null;
    ?>

    <main>
        <h1>Informe um número</h1>

        <!-- form com action retroalimentado -->
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="idnum">Número</label>
            <input type="number" name="num" id="idnum" value="<?=$num?>" required>

            <input type="submit" value="Calcular Raízes">
        </form>

        <div id="resul">

            <?php
            if ($num != null) {
                $raiz2 = number_format(sqrt($num), 3, ',', '.');
                $raiz3 = number_format($num ** (1/3), 3, ',', '.');

                echo "
                    <h2 style=\"margin-top: 20px;\">Resultado final</h2>

                    <p>Analisando o <strong>número $num</strong>, temos:</p>
                    <ul>
                        <li>A sua raiz quadrada é <strong>$raiz2</strong></li>
                        <li>A sua raiz cúbica é <strong>$raiz3</strong></li>
                    </ul>                                                    
                ";

            }
            ?>
            
        </div>
    </main>  
</body>
</html>