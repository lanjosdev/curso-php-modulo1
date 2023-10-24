<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos primitivos em PHP</title>
</head>

<body>
    <h1>Teste de tipos primitivos</h1>

    <?php 
    // $num = 0x13;
    // echo "O valor da variavel é $num"; 

    // $num = (integer) "13";
    // var_dump($num);

    // Primitivos Compostos
    // Array
    $vetor = [6, true, "Maria", 3.14];
    var_dump($vetor); //tipo array com 4 elementos

    // Object
    class Pessoa {
        private string $nome; //atributo da classe
    }

    $fisica = new Pessoa; // instancia pela classe Pessoa
    var_dump($fisica); //tipo object da classe Pessoa
    ?>
</body>
</html>