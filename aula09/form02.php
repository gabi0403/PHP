<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form 02</title>
</head>
<body>
    <form method="POST">
        <label>E-mail: </label>
        <input type="email" name="email" id="email" placeholder="email@dominio.com">
        <input type="submit" value="Enviar">
        <label>Senha:</label>
        <input type="password" name="senha" id="senha">
        <input type="submit" value="Enviar">
    </form>

    <?php 
    $email = $_POST["email"];
    echo "Email informado: $email";
    echo "<br>Login ok";
    
    
    ?>
</body>
</html>