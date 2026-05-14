<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Reajustador de Preços</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main class="card main-card">
        <h1>Reajustador de Preços</h1>
        <form action="processa.php" method="POST">
            <div class="input-container">
                <label for="preco">Preço do Produto (R$):</label>
                <input type="number" name="preco" id="preco" step="0.01" min="0" value="100" required>
            </div>

            <div class="input-container">
                <label for="reajuste">Percentual de Reajuste: <span id="p">0</span>%</label>
                <input type="range" name="reajuste" id="reajuste" min="0" max="100" step="1" value="0" 
                       oninput="p.innerText = reajuste.value">
            </div>

            <button type="submit">Calcular Reajuste</button>
        </form>
    </main>

    <script>
        // Inicializa o valor do span ao carregar a página
        document.getElementById('p').innerText = document.getElementById('reajuste').value;
    </script>
</body>
</html>