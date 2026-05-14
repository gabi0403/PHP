<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de Moedas v2.0</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="card">
        <div class="header-icon">💸</div>
        <h1>Conversor de Moedas</h1>
        <p>Converta seus Reais para Dólares em tempo real.</p>

        <form action="processa.php" method="POST">
            <div class="input-group">
                <label for="valor">Quanto você tem? (R$)</label>
                <input type="number" name="valor" id="valor" step="0.01" placeholder="Ex: 1500,00" required>
            </div>

            <div class="input-group">
                <label for="dolar">Cotação do Dólar hoje (US$)</label>
                <input type="number" name="dolar" id="dolar" step="0.01" placeholder="Ex: 5.10" required>
            </div>

            <button type="submit">Converter Agora</button>
        </form>
    </div>
</body>
</html>