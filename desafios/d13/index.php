<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="style.css">

    <title>Desafio PHP - 13</title>

    <style>
        li + li {
            margin-top: 10px;
        }

        .nota {
            height: 50px;
        }
    </style>
</head>
<body>
    <?php 
    // Capturando os dados do Formulario Retroalimentado
    $valorSaque = $_GET['saque'] ?? 0;
    $sobra = $valorSaque;
    ?>

    <main>
        <h1>Caixa Eletrônico</h1>

        <!-- form com action retroalimentado -->
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="saq">Qual valor deseja sacar? (R$)*</label>
            <input type="number" name="saque" id="saq" value="<?=$valorSaque?>" min="5" step="5" required>

            <small>*Notas disponiveis: <b>R$100</b>, <b>R$50</b>, <b>R$10</b> e <b>R$5</b></small>

            <input type="submit" value="Sacar">
        </form>

        <div id="resul">

            <?php
            if ($valorSaque != 0) {

                $cem = (int)($sobra / 100);
                $sobra = $sobra % 100;

                $fifty = (int)($sobra / 50);
                $sobra = $sobra % 50;

                $dez = (int)($sobra / 10);
                $sobra = $sobra % 10;

                $cinco = (int)($sobra / 5);
                $sobra = $sobra % 5;


                if($sobra == 0) {
                echo "
                    <h2 style=\"margin-top: 20px;\">Saque de R$" .number_format($valorSaque, 2, ",","."). " realizado</h2>

                    <p>As notas do saque serão:</p>

                    <ul>
                        <li><img src=\"./assets/100-reais.jpg\" class=\"nota\" alt=\"Nota de 100 reais\"> x$cem</li>
                        <li><img src=\"./assets/50-reais.jpg\" class=\"nota\" alt=\"Nota de 50 reais\"> x$fifty</li>
                        <li><img src=\"./assets/10-reais.jpg\" class=\"nota\" alt=\"Nota de 10 reais\"> x$dez</li>
                        <li><img src=\"./assets/5-reais.jpg\" class=\"nota\" alt=\"Nota de 5 reais\"> x$cinco</li>
                    </ul>
                ";
                } else {
                echo "
                    <h2 style=\"margin-top: 20px; color: red\">Saque Inválido!</h2>

                    <p>As notas disponiveis no caixa não atinge o saque exato do valor digitado.</p>
                ";
                }
                
            }
            ?>
            
        </div>
    </main>  
</body>
</html>