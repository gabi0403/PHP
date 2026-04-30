
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabela </title>


</head>
<body>
    <table border="2px solid">
        <tr>
            <th>Nome:</th>
            <th>Cargo:</th>
            <th>Salário:</th>
            <?php
            $funcionarios = [
                ["nome" => "Ana", "cargo" => "Analista", "salario"=> 3400],
                ["nome" => "Bárbara", "cargo" => "Desenvolvedor", "salario" => 3400],
                ["nome" => "Emily", "cargo" => "Gerente", "salario"=> 3500],
             ];

            // echo "<strong>Funcionários: </strong>" . $funcionarios[2]["nome"] .
            // "<strong><br> Cargo: </strong>" . $funcionarios[2]["cargo"] . "<br>";
            
            foreach ($funcionarios as $f){
                echo "<tr> <td>" 
                . $f["nome"] . 
                " </td><td>" . 
                $f["cargo"] . 
                "</td>" .
                 "<td>" .
                $f["salario"] .
                "</td>";
            };
            ?>
        </tr>
    </table>
</body>
</html>