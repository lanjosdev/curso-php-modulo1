<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="style.css">

    <title>Desafio PHP - 06</title>
</head>
<body>
    <?php 
    // Capturando os dados do Formulario Retroalimentado
    $dividendo = $_GET['dividendo'] ?? null;
    $divisor = $_GET['divisor'] ?? null;
    ?>

    <main>
        <h1>Anatomia de uma Divisão</h1>

        <!-- form com action retroalimentado -->
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="d1">Dividendo</label>
            <input type="number" name="dividendo" id="d1" min='0' value="<?=$dividendo?>" required>

            <label for="d2">Divisor</label>
            <input type="number" name="divisor" id="d2" min="1" value="<?=$divisor?>" required>

            <input type="submit" value="Calcular">
        </form>

        <div id="resul">

            <?php
            if ($dividendo != null) {
                $divisao = intdiv($dividendo, $divisor);
                $resto = $dividendo % $divisor;

                print "
                    <h2 style=\"margin-top: 20px;\">Estrutura da Divisão</h2>

                    <table class=\"divisao\">
                        <tr>
                            <td>$dividendo</td>
                            <td>$divisor</td>
                        </tr>
                        <tr>
                            <td>$resto</td>
                            <td>$divisao</td>
                        </tr>
                    </table>                    
                ";
                // <ul>
                //         <li>Dividendo: $dividendo</li>
                //         <li>Divisor: $divisor</li>
                //         <li>Divisão: $divisao</li>
                //         <li>Resto:  $resto</li>
                //     </ul>
            }
            ?>
            
        </div>
    </main>  
</body>
</html>