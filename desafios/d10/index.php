<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="style.css">

    <title>Desafio PHP - 10</title>
</head>
<body>
    <?php 
    // Capturando os dados do Formulario Retroalimentado
    date_default_timezone_set("America/Sao_Paulo"); //GMT-3
    $anoAtual = date("Y");
    $anoNasc = $_GET['anoNasc'] ?? '';
    $anoFuturo = $_GET['anoFuturo'] ?? $anoAtual;
    ?>

    <main>
        <h1>Calculando a sua idade</h1>

        <!-- form com action retroalimentado -->
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="anoN">Em que ano você nasceu?</label>
            <input type="number" name="anoNasc" id="anoN" value="<?=$anoNasc?>" max="<?=$anoAtual - 1?>" required>

            <label for="anoF">Quer saber sua idade em que ano? (atualmente estamos em <strong><?=$anoAtual?></strong>)</label>
            <input type="number" name="anoFuturo" id="anoF" value="<?=$anoFuturo?>" required>


            <input type="submit" value="Veja sua idade">
        </form>

        <div id="resul">

            <?php
            if ($anoNasc != '') {
                $idade = $anoFuturo - $anoNasc;

                echo "
                    <h2 style=\"margin-top: 20px;\">Resultado</h2>
                ";

                if ($anoNasc > $anoFuturo) {
                    echo "<p>Em $anoFuturo você ainda não era nascido!</p>";
                } else {
                    if ($anoFuturo < $anoAtual) {
                        echo "<p>Quem nasceu em $anoNasc teve <strong>$idade anos</strong> em $anoFuturo!</p>";
                    } else {
                        echo "<p>Quem nasceu em $anoNasc vai ter <strong>$idade anos</strong> em $anoFuturo!</p>";
                    }
                }
            }
            ?>
            
        </div>
    </main>  
</body>
</html>