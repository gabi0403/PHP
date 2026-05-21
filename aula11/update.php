<?php
require_once 'connect_postgres.php';

$sql = "UPDATE alunos
SET sobrenome = 'Pereira'
WHERE id = 5";

$conexao->exec($sql);
echo "Usuário atualizado";
?>