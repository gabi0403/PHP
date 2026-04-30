
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabuada</title>
</head>
<body>
    <table border="1">
        <tbody>

       
    <?php 

    $num = 4;
    
    for ($i = 0; $i <=10; $i++){
        echo "<tr>";
        echo "<td>";
        echo "$num x $i = " . ($num*$i) . "<br> </td>";
        echo "</tr>";
    }
    
    ?>

        </tbody>
    </table>
</body>
</html>