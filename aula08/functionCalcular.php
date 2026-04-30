<?php 

function calcularTempoEmpresa($anoFundacao, $anoAtual){
   $tempo = $anoAtual - $anoFundacao;
   echo "Tempo empresa: $tempo anos";
};
calcularTempoEmpresa(2009,2026);

?>