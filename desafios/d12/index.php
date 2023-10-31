<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="style.css">

    <title>Desafio PHP - 12</title>
</head>
<body>
    <?php 
    // Capturando os dados do Formulario Retroalimentado
    $segundosTotal = $_GET['segundos'] ?? 0;
    $sobra = $segundosTotal;
    ?>

    <main>
        <h1>Calculadora de Tempo</h1>

        <!-- form com action retroalimentado -->
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="segs">Qual é o total de segundos?</label>
            <input type="number" name="segundos" id="segs" value="<?=$segundosTotal?>" min="1" required>

            <input type="submit" value="Calcular">
        </form>

        <div id="resul">

            <?php
            if ($segundosTotal != 0) {

                $semanas = (int)($sobra / 604800);
                $sobra = $sobra % 604800;

                $dias = (int)($sobra / 86400);
                $sobra = $sobra % 86400;

                $horas = (int)($sobra / 3600);
                $sobra = $sobra % 3600;

                $minutos = (int)($sobra / 60);
                $sobra = $sobra % 60;

                $segundos = $sobra; 

                echo "
                    <h2 style=\"margin-top: 20px;\">Totalizando tudo</h2>

                    <p>Analisando o valor que você digitou, <strong>". number_format($segundosTotal, 0, ',', '.') ." segundos</strong> equivalem a um total de:</p>

                    <ul>
                        <li>$semanas semanas</li>
                        <li>$dias dias</li>
                        <li>$horas horas</li>
                        <li>$minutos minutos</li>
                        <li>$segundos segundos</li>
                    </ul>
                ";
            }
            ?>
            
        </div>
    </main>  
</body>
</html>