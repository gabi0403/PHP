<?php
// Usando o isset para verificar se o botão foi clicado
if (isset($_POST['acao'])) {
    $sorteados = [];

    // Laço para garantir 6 números únicos
    while (count($sorteados) < 6) {
        $numero = mt_rand(1, 60); // Sorteia entre 1 e 60
        
        // Só adiciona ao array se o número ainda não estiver lá
        if (!in_array($numero, $sorteados)) {
            $sorteados[] = $numero;
        }
    }

    // Organiza os números em ordem crescente
    sort($sorteados);

    // Formata com zeros à esquerda (ex: 5 vira 05)
    $numeros_formatados = array_map(function($n) {
        return str_pad($n, 2, "0", STR_PAD_LEFT);
    }, $sorteados);

    // Junta tudo com um traço
    $resultado_final = implode("-", $numeros_formatados);

} else {
    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Resultado do Sorteio</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="card">
        <h2>Números Sorteados:</h2>
        
        <div class="mega-display">
            <?php echo $resultado_final; ?>
        </div>

        <p>Boa sorte! Quem sabe hoje é seu dia?</p>
        
        <a href="index.php" class="btn-voltar">⬅️ Tentar novamente</a>

        <details style="margin-top: 30px; font-size: 10px; opacity: 0.4;">
            <summary>Diagnóstico Técnico (var_dump)</summary>
            <pre><?php var_dump($sorteados); ?></pre>
        </details>
    </div>
</body>
</html>