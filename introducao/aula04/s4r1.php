<?php 

$anoFundacao = 2000;
$anoAtual = 2026;
//calculo 1
$tempoEmpresa = $anoAtual - $anoFundacao;


$qtdFuncionariosFundacao = 30;
$qtdFuncionariosAtual = 40;
//calculo 2
$crescimentoFuncionarios = $qtdFuncionariosAtual - $qtdFuncionariosFundacao;


echo "A empresa tem " . $tempoEmpresa . " anos de existência."; // concatenação + calculo 
echo "A empresa cresceu em " . $crescimentoFuncionarios . " funcionários desde a sua fundação."; // concatenação + calculo 
echo "A empresa teve um crescimento de " . ($crescimentoFuncionarios / $qtdFuncionariosFundacao * 100) . "% no número de funcionários."; // concatenação + calculo + comparação

?>