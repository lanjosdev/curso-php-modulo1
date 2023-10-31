<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="style.css">

    <title>Desafio PHP - 11</title>
</head>
<body>
    <?php 
    // Capturando os dados do Formulario Retroalimentado
    $precoAtual = $_GET['precoAtual'] ?? null;
    $reajuste = $_GET['reajuste'] ?? 0;
    ?>

    <main>
        <h1>Reajuste de Preços</h1>

        <!-- form com action retroalimentado -->
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="precoP">Preço do Produto (R$)</label>
            <input type="number" name="precoAtual" id="precoP" value="<?=$precoAtual?>" min="0.10" step="0.01" required>

            <label for="reajuste">Qual será o percentual de reajuste? (<strong><span id="porcento"><?=$reajuste?></span>%</strong>)</label>
            <input type="range" name="reajuste" id="reajuste" value="<?=$reajuste?>" min="0" max="100" step="1" oninput="mudaValor()" style="padding: 12px 0;">

            <input type="submit" value="Reajustar">
        </form>

        <div id="resul">

            <?php
            if ($precoAtual != null) {
                
                $precoReajuste = $precoAtual * (1 + $reajuste/100);


                echo "
                    <h2 style=\"margin-top: 20px;\">Resultado do Reajuste</h2>

                    <p>O produto que custava R$". number_format($precoAtual, 2, ",", ".") .", com <strong>$reajuste% de aumento</strong> vai passar a custar <strong>R$". number_format($precoReajuste, 2, ',', '.') ."</strong> a partir de agora.</p>
                ";

            }
            ?>
            
        </div>

        <script>
            function mudaValor() {
                // let p = document.getElementById(porcento);
                porcento.innerHTML = reajuste.value;
            }
        </script>
    </main>  
</body>
</html>