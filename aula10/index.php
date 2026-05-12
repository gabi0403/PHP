<?php 
// Incluindo a lógica do sistema
require_once 's10r1.php'; 
$status_nave = isset($status_nave) ? $status_nave : 'normal';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Ponte de Comando</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="<?php echo $status_nave; ?>">

    <div class="painel-comando">
        <p>STATUS DA MISSÃO: <strong><?php echo strtoupper($status_nave); ?></strong></p>
        <h1>Bem-vindo, Comandante <?php echo $_SESSION['tripulante'] ?? 'Desconhecido'; ?></h1>
        
        <form method="POST">
            <input type="text" name="nome" placeholder="Assuma o controle (seu nome)" required>
            <button type="submit" class="btn btn-principal">Identificar Tripulante</button>
        </form>

        <div style="margin-top: 20px;">
            <p>Mudar Atmosfera da Nave:</p>
            <a href="?atmosfera=exploracao" class="btn btn-status">Modo Exploração</a>
            <a href="?atmosfera=alerta" class="btn btn-status">Alerta Vermelho</a>
        </div>

        <div class="debug-monitor">
            <strong>> DIAGNÓSTICO DO SISTEMA (var_dump):</strong>
            <pre>
<?php 
    echo "SESSION_DATA: "; var_dump($_SESSION);
    echo "COOKIE_PREF: "; var_dump($_COOKIE['nave_status'] ?? 'default');
?>
            </pre>
        </div>
    </div>

</body>
</html>