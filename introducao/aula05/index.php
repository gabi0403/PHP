<?php 

$setor = "TI";

switch ($setor){
    case "TI":
        echo "Setor de Tec";
        break;

    case "RH":
        echo "Recursos Humanos";
        break;
    
    case "Financeior":
        echo "Setor Financeiro";
        break;

    default:
        echo "Setor não identificado";
}
?>