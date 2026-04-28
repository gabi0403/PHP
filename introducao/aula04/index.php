<?php 

$funcionarios = 40;
$mediaEmpresa = $funcionarios >= 39;

// echo "Empresa de médio porte?";
// echo $mediaEmpresa;

echo "A empresa é de: " . ($mediaEmpresa? "Medio porte" : "Pequeno porte");
?>