<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Resultado do Reajuste</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="card result-card">
        <?php 
            $preco = $_POST["preco"] ?? 0;
            $percentual = $_POST["reajuste"] ?? 0;

            // Lógica do cálculo
            $aumento = ($preco * $percentual) / 100;
            $novoPreco = $preco + $aumento;

            // Formatador para real
            $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
        ?>

        <h1>Resultado do Reajuste</h1>
        <p>
            O produto que custava <strong><?= numfmt_format_currency($padrao, $preco, "BRL") ?></strong> 
            com um reajuste de <strong><?= number_format($percentual, 2, ",", ".") ?>%</strong> 
            passará a custar <strong><?= numfmt_format_currency($padrao, $novoPreco, "BRL") ?></strong>.
        </p>

        <button onclick="window.location.href='index.php'" class="btn-back">Voltar</button>
    </div>
</body>
</html>