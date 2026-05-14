<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Conversor v2</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="card">
        <h1>Conversor v2</h1>
        <p>Busca automática de cotação via Banco Central.</p>
        
        <form action="processa.php" method="POST">
            <input type="number" name="valor" step="0.01" placeholder="Valor em R$" required>
            <button type="submit">Converter</button>
        </form>
    </div>
</body>
</html>