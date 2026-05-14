<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Análise de Salário</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="card main-card">
        <div class="chip">💰 Finance Mode</div>   <!--só um tempero de css -->
        <form action="processa.php" method="POST">
            <label for="salario">Seu Salário Mensal:</label>
            <input type="number" name="salario" step="0.01" placeholder="R$ 0,00" required>
            
            <div class="alert-box">
                Considerando o mínimo de <strong>R$ 1.621,00</strong>
            </div>
            
            <button type="submit">Gerar Análise</button>
        </form>
    </div>
</body>
</html>