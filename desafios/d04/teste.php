<pre>

<?php 
$dataInicio = date("m-d-Y", strtotime("-7 days")); //data atual do sistema - 7 dias
$dataAtual = date("m-d-Y"); //data atual do sistema
$api_url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''. $dataInicio .'\'&@dataFinalCotacao=\''. $dataAtual .'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';

$response = json_decode(file_get_contents($api_url)); //objeto

$cotacao = $response->value[0]->cotacaoCompra; //valor em float

echo "A cotação é: $cotacao";
?>

</pre>