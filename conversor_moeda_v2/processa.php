<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Resultado v2</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="card">
    <?php 
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $valor = $_POST["valor"] ?? 0;
    
    // As datas precisam estar nesse formato para a API do BC
    $inicio = date("m-d-Y", strtotime("-7 days"));
    $fim = date("m-d-Y");
    
    // Ajustamos a URL para usar códigos que a API aceita (evitando o erro 400)
    $url = "https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial='{$inicio}'&@dataFinalCotacao='{$fim}'&\$top=100&\$format=json&\$select=cotacaoCompra";
    
    $dados = json_decode(file_get_contents($url), true);
    
    // Pegamos a cotação (aqui usamos o primeiro resultado que vier)
    $dolar = $dados['value'][0]['cotacaoCompra'];
    
    // Agora a conta funciona!
    $result = $valor / $dolar;
    
    echo "<h2> Resultado da Conversão: </h2>";
    $padrao_brasil = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
    $padrao_eua = numfmt_create("en_US",NumberFormatter::CURRENCY);
    
    echo "<p>Valor em Reais (R$): " . numfmt_format_currency($padrao_brasil, $valor, "BRL") . "</p>";
    echo "<p><strong> Valor em Dólares (US$): " . numfmt_format_currency($padrao_eua, $result, "USD") . "</p></strong>";
    echo "<p><strong> Cotação do Dólar (US$): " . numfmt_format_currency($padrao_eua, $dolar, "USD") . "</p></strong>";

    }
    else {
        echo "Por favor, envie um valor usando o formulário.";
    }
    ?>
    <button onclick="window.location.href='index.php'">Voltar ao formulário</button>
    </div>
</body>
</html>