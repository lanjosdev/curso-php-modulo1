<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="style.css">

    <title>Desafio PHP - 07</title>
</head>
<body>
    <?php 
    // Capturando os dados do Formulario Retroalimentado
    $salario = $_GET['salario'] ?? null;
    $salarioMin = 1380;
    $padrao = numfmt_create("pt-BR", NumberFormatter::CURRENCY);
    ?>

    <main>
        <h1>Informe seu salário</h1>

        <!-- form com action retroalimentado -->
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="sal">Salário (R$)</label>
            <input type="number" name="salario" id="sal" step="0.01" value="<?=$salario?>" required>
            
            <?php
            if ($salario != null) {
                echo "<p>Considerando o salário mínimo de <strong>". numfmt_format_currency($padrao, $salarioMin, "BRL") ."</strong></p>";
            }
            ?>
            
            <input type="submit" value="Calcular">
        </form>

        <div id="resul">

            <?php
            if ($salario != null) {

                $qtSalMin = intdiv($salario, $salarioMin);
                // $resto = $salario % $salarioMin;   
                $resto = $salario - $salarioMin * $qtSalMin; // diferente do %, essa linha considera até os centavos (casas decimais)   

                echo "
                    <h2 style=\"margin-top: 20px;\">Resultado Final</h2>

                    <p>Quem recebe um salário de ". numfmt_format_currency($padrao, $salario, "BRL") ." ganha ";

                if ($salario >= $salarioMin) {
                    if ($qtSalMin > 1) {
                        echo "<strong>$qtSalMin salários mínimos</strong>";                        
                    } else {
                        echo "<strong>$qtSalMin salário mínimo</strong>";   
                    }

                    if ($resto > 0) {
                        echo " + ". numfmt_format_currency($padrao, $resto, "BRL") .".</p>";
                    } else {
                        echo ".</p>";
                    }
                } else {
                    echo "<strong>abaixo de um salário mínimo</strong>.</p>";
                }
            }
            ?>
            
        </div>
    </main>  
</body>
</html>