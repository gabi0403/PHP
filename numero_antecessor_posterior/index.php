<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Calculadora de Vizinhos</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="card">
        <h1>Qual o número?</h1>
        <p>Digite um valor para descobrir quem vem antes e quem vem depois dele.</p>
        
        <form action="processa.php" method="POST">
            <input type="number" name="original" placeholder="Ex: 42" required>
            <button type="submit">Calcular Vizinhos</button>
        </form>
    </div>
</body>
</html>