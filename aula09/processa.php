<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <title>Dados Recebidos</title>
</head>
<body>
    <div class="caixa-principal">
        <h2>Dados Recebidos</h2>
        <hr>

        <?php 
        if (isset($_POST["nome"], $_POST["idade"], $_POST["cpf"])) {
            $nome = $_POST["nome"];
            $idade = $_POST["idade"];
            $cpf = $_POST["cpf"];

            function exibirCampo($label, $valor) {
                echo "<label>$label:</label>";
                echo "<p style='margin: 0 0 15px 0; padding: 10px; background: #f9f9f9; border: 1px solid #eee; border-radius: 5px;'>$valor</p>";
            }

            exibirCampo("Nome", $nome);
            exibirCampo("Idade", $idade);
            exibirCampo("CPF", $cpf);
        }
        ?>

        <a href="s9r1.php" class="btn-voltar">Voltar ao início</a>
    </div>
</body>
</html>
