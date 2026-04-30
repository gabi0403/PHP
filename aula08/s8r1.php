<?php 

// calcular tempo
function calcularTempoEmpresa($anoAtual, $anoFundacao){
    $tempo = $anoAtual - $anoFundacao;
    echo "Tempo de Empresa: $tempo anos";
};
 calcularTempoEmpresa(2000, 2026);

//calcular porte da empresa
function classificarEmpresa($funcionarios){
    if ($funcionarios <50 ){
        return "Pequeno Porte";
    }
    else{
        return "Médio ou grande porte";
    }

}

echo classificarEmpresa(20) . "<br>";
echo classificarEmpresa(70) . "<br>";



?>