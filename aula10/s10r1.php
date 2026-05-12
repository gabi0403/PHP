// OS ARQUIVOS UTILIZADOS SÃO: s10r1 pra lógica, style.css pra estilização e index.php pra página html

<?php
// Inicia a sessão para guardar o nome
session_start();

/**
 * Lógica da Sessão usando isset()
 */
if (isset($_POST['nickname'])) {
    // Salva o nome na sessão apenas se o formulário for enviado
    $_SESSION['meu_nome'] = htmlspecialchars($_POST['nickname']);
}

/**
 * Lógica do Cookie usando isset()
 */
if (isset($_GET['vibe'])) {
    $vibe = $_GET['vibe'];
    // Define o cookie para durar 30 dias
    setcookie('user_vibe', $vibe, time() + (86400 * 30), "/");
    // Redireciona para limpar a URL
    header("Location: index.php");
    exit;
}


// Verifica se existe o cookie de vibe, senão define como 'alegre'
$vibe_atual = isset($_COOKIE['user_vibe']) ? $_COOKIE['user_vibe'] : "alegre";
?>
