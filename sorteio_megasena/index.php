<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Sorteador Mega-Sena</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="card">
        <div class="icon">🍀</div>
        <h1>Gerador de Sorte</h1>
        <p>Clique no botão para gerar seus 6 números da sorte para a Mega-Sena.</p>
        
        <form action="processa.php" method="POST">
            <input type="hidden" name="acao" value="sortear">
            <button type="submit">Gerar Números</button>
        </form>
    </div>
</body>
</html>