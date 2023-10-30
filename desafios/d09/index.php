<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="style.css">

    <title>Desafio PHP - 09</title>
</head>
<body>
    <?php 
    // Capturando os dados do Formulario Retroalimentado
    $num1 = $_GET['num1'] ?? null;
    $peso1 = $_GET['peso1'] ?? null;
    $num2 = $_GET['num2'] ?? null;
    $peso2 = $_GET['peso2'] ?? null;
    ?>

    <main>
        <h1>Médias Aritméticas</h1>

        <!-- form com action retroalimentado -->
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="n1">1° Valor</label>
            <input type="number" name="num1" id="n1" value="<?=$num1?>" required>

            <label for="p1">1° Peso</label>
            <input type="number" name="peso1" id="p1" value="<?=$peso1?>" min="1" required>


            <label for="n2">2° Valor</label>
            <input type="number" name="num2" id="n2" value="<?=$num2?>" required>

            <label for="p2">2° Peso</label>
            <input type="number" name="peso2" id="p2" value="<?=$peso2?>" min="1" required>


            <input type="submit" value="Calcular Médias">
        </form>

        <div id="resul">

            <?php
            if ($num1 != null) {
                $mediaS = ($num1 + $num2) / 2;
                $mediaP = ($num1*$peso1 + $num2*$peso2) / ($peso1 + $peso2);


                echo "
                    <h2 style=\"margin-top: 20px;\">Cálculo das Médias</h2>

                    <p>Analisando os valores <strong>$num1</strong> e <strong>$num2</strong>:</p>
                    <ul>
                        <li>A <strong>Média Aritmética Simples</strong> entre os valores é igual a <strong>". number_format($mediaS, 2, ',', '.') .".</strong></li>
                        <li>A <strong>Média Aritmética Ponderada</strong> com pesos $peso1 e $peso2 é igual a <strong>". number_format($mediaP, 2, ',', '.') .".</strong></li>
                    </ul>                                                    
                ";

            }
            ?>
            
        </div>
    </main>  
</body>
</html>