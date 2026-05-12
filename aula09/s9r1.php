<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>S9 R1 AT1 - Cadastro</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="caixa-principal">
        <form method="POST" action="processa.php">
            <h2>Formulário de Cadastro</h2>
            
            <label for="nome">Nome: </label>
            <input type="text" name="nome" id="nome" required>
            
            <label for="idade">Idade: </label>
            <input type="number" name="idade" id="idade" required>
            
            <label for="cpf">CPF: </label>
            <input type="number" name="cpf" id="cpf" required>

            <div class="botoes">
                <input type="reset" value="Limpar" class="btn-limpar">
                <input type="submit" value="Enviar" class="btn-enviar">
            </div>
        </form>
    </div>
</body>
</html>
