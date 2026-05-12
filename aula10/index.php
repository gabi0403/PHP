// OS ARQUIVOS UTILIZADOS SÃO: s10r1 pra lógica, style.css pra estilização e index.php pra página html
<?php 
// Inclui o arquivo de processamento
require_once 's10r1.php';
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Meu Mural</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="<?php echo $vibe_atual; ?>">

    <nav>
        <a href="index.php">Mural</a>
        <a href="#">Amigos</a>
        <a href="#">Sair</a>
    </nav>

    <div class="mural">
        <h1>Mural do(a) <?php echo isset($_SESSION['meu_nome']) ? $_SESSION['meu_nome'] : "Visitante"; ?></h1>
        
        <p>Minha vibe agora é: <strong><?php echo $vibe_atual; ?></strong></p>

        <form method="POST">
            <input type="text" name="nickname" placeholder="Seu apelido..." required>
            <br>
            <button type="submit">Atualizar Nome (Sessão)</button>
        </form>

        <div class="opcoes">
            <p>Escolher humor (Cookie):</p>
            <a href="?vibe=alegre">Alegre</a>
            <a href="?vibe=zen">Zen</a>
            <a href="?vibe=radical">Radical</a>
        </div>
    </div>

    <footer>
        <details>
            <summary style="cursor:pointer; opacity: 0.5;">Clique para ver o Debug Técnico (Requisito)</summary>
            <div style="background: rgba(255,255,255,0.8); padding: 10px; margin-top: 10px; border: 1px solid #000;">
                <?php 
                    if(isset($_SESSION)) { 
                        echo "<strong>DADOS DA SESSÃO:</strong>"; 
                        var_dump($_SESSION); 
                    }
                    echo "<br><strong>DADOS DO COOKIE:</strong>"; 
                    var_dump($vibe_atual);
                ?>
            </div>
        </details>
    </footer>

</body>
</html>