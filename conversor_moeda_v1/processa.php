<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Resultado da Conversão</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="card result-card">
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $valor = $_POST["valor"] ?? 0;
            $dolar = $_POST["dolar"] ?? 0;
            
            // Evita divisão por zero
            $result = ($dolar > 0) ? ($valor / $dolar) : 0;

            echo "<h1>Resultado</h1>";

            // Criando formatadores internacionais
            $padrao_brasil = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
            $padrao_eua = numfmt_create("en_US", NumberFormatter::CURRENCY);

            echo "<div class='result-box'>";
            echo "<p class='label'>Valor informado:</p>";
            echo "<p class='value'>" . numfmt_format_currency($padrao_brasil, $valor, "BRL") . "</p>";
            
            echo "<hr>";

            echo "<p class='label'>Total convertido:</p>";
            echo "<p class='value highlight'>" . numfmt_format_currency($padrao_eua, $result, "USD") . "</p>";
            echo "</div>";
            
            echo "<p class='info'>Cotação usada: " . numfmt_format_currency($padrao_eua, $dolar, "USD") . "</p>";
        } else {
            echo "<p>Por favor, envie um valor usando o formulário.</p>";
        }
        ?>
        
        <button onclick="window.location.href='index.php'" class="btn-secondary">Novo Cálculo</button>
    </div>
</body>
</html>