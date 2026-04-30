<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos da Shoppee</title>
</head>
<body>
    

   <table border="2px">
        <th>Nome</th> 
        <th>Preço</th> 

        <?php
            $produtos = [
            ["nome" => "Batata", "preco"=> 9969.20],
            ["nome"=> "Manjericao", "preco"=> 10.90],
            ["nome"=> "Cabo HDMI", "preco"=> 30.50],
            ]; // array 

            foreach ($produtos as $p){ //uso do foreach
                echo  "<tr><td>". $p["nome"] ."</td>" .
                "<td>" . $p["preco"] . "</td> <tr>";

            };
        ?>

    </table> 



</body>
</html>
