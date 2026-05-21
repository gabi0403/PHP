<?php 
require_once 'connect_postgres.php';

$sql = "INSERT INTO alunos (nome, sobrenome, data_nascimento, turma)
VALUES (:nome, :sobrenome, :data_nascimento, :turma)";

$stmt = $conexao->prepare($sql);
$stmt->bindValue(":nome", "Emily");
$stmt->bindValue(":sobrenome", "Guimaraes");
$stmt->bindValue(":data_nascimento", "2009-01-13");
$stmt->bindValue(":turma", "I2D35A");

$stmt->execute();

echo "Aluno inserido com sucesso!"
?>