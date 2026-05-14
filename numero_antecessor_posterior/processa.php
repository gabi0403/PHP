<?php 
    // Primeiro verificamos se o dado chegou
    if (isset($_POST["original"]) && $_POST["original"] !== "") {
        $original = $_POST["original"];
        $ant = $original - 1;
        $pos = $original + 1;
    } else {
        // Se tentarem acessar a página direto, volta pro index
        header("Location: index.php");
        exit;
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Resultado do Cálculo</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="card">
        <h2>🔢 Resultado</h2>
        <div class="result-grid">
            <div class="box small">
                <span>Antecessor</span>
                <strong><?php echo $ant; ?></strong>
            </div>
            
            <div class="box highlight">
                <span>Número Digitado</span>
                <strong><?php echo $original; ?></strong>
            </div>

            <div class="box small">
                <span>Sucessor</span>
                <strong><?php echo $pos; ?></strong>
            </div>
        </div>

        <a href="index.php" class="btn-voltar">⬅ Voltar e calcular outro</a>

        <details style="margin-top: 20px; font-size: 10px; opacity: 0.5;">
            <summary>Debug</summary>
            <?php var_dump($_POST); ?>
        </details>
    </div>
</body>
</html>