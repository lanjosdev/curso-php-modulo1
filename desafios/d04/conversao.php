<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="style.css">

    <title>Desafio PHP - 04</title>
</head>

<body>
    <main>
        <h1>Conversor de Moedas v2.0</h1>

        
        <?php 
        $real = $_GET["valor"] ?? 0;

        $dataInicio = date("m-d-Y", strtotime("-7 days"));
        $dataAtual = date("m-d-Y");
        $api_url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''. $dataInicio .'\'&@dataFinalCotacao=\''. $dataAtual .'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';
        $response = json_decode(file_get_contents($api_url));
        $cotacao = $response->value[0]->cotacaoCompra; // dolar API hoje
    
        $convertido = $real / $cotacao;

        $padrao = numfmt_create("pt-BR", NumberFormatter::CURRENCY);


        echo "<p>Seus " . numfmt_format_currency($padrao, $real, "BRL") . " equivalem a <strong>" . numfmt_format_currency($padrao, $convertido, "USD") . "*</strong></p>";

        echo "<small><strong>*Cotação de R$" . number_format($cotacao, 2, ",", ".") . "</strong> obtida diretamente no site do <a href=\"https://dadosabertos.bcb.gov.br/\" target=\"_blank\">Banco Central do Brasil</a> </small>"
        ?>

        
        <a href="./index.html" style="background-color: transparent; border-bottom:none"><button>&#x2B05; Voltar</button></a>
        
    </main>
</body>
</html>