<?php
// OS ARQUIVOS UTILIZADOS SÃO: s10r1 pra lógica, style.css pra estilização e index.php pra página html
session_start();


// lógica da sessão: nome do comandante

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['nome'])) {
    // armazena o nome na sessão com um filtro de limpeza
    $_SESSION['tripulante'] = htmlspecialchars($_POST['nome']);
}


//  lógica do cookie será atmosfera da nave
 
if (isset($_GET['atmosfera'])) {
    $modo = $_GET['atmosfera'];
    setcookie('nave_status', $modo, time() + 3600, "/");
    
    // redireciona para evitar reenvio de formulário e atualizar visual
    header("Location: index.php");
    exit;
}

// define o estado atual baseado no cookie ou padrão "exploração"
$status_nave = $_COOKIE['nave_status'] ?? 'exploracao';
?>
