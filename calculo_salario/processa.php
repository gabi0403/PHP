<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Resultado da Análise</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="card result-card">
        <?php 
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $salario = $_POST["salario"] ?? 0;
            $minimo = 1621.00;

            $quantidade = floor($salario / $minimo);
            $sobra = $salario - ($quantidade * $minimo);

            $fmt = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

            echo "<h1>Análise do Salário</h1>";
            
            echo "<div class='summary'>";
                echo "<p>Valor bruto: <span>" . numfmt_format_currency($fmt, $salario, "BRL") . "</span></p>";
            echo "</div>";

            echo "<div class='stats-container'>";
                echo "<div class='stat-box'>";
                    echo "<small>Salários Mínimos</small>";
                    echo "<strong>" . (int)$quantidade . "x</strong>";
                echo "</div>";
                
                echo "<div class='stat-box'>";
                    echo "<small>Sobra</small>";
                    echo "<strong>" . numfmt_format_currency($fmt, $sobra, "BRL") . "</strong>";
                echo "</div>";
            echo "</div>";
        }
        ?>
        
        <button onclick="window.location.href='index.php'" class="btn-back">Novo Cálculo</button>
    </div>
</body>
</html>