<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        body{
            text-align: center;
        }
    </style>
</head>
<body>
    <?php
        $empresa =  "Empresa XPTO123"; // $ = variável
        $ano = 2010;
        $funcionario = 25;

        echo "<h1> $empresa </h1>";
        echo "<p> Ano de Fundação: $ano</p>";
        echo "<p> Funcionários: $funcionario </p>";
        echo "<p> A empresa está:".($empresaativa? "Ativa":"Desativada");
        // o . é concatenação
        
    ?>
</body>
</html>