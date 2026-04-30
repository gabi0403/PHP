<?php 
for ($i = 1; $i <= 5; $i++) {
    echo "Mensagem automática $i<br>"; // mensagem q repete 5 vezes
}

//logica integrada:
for ($i = 1; $i <= 10; $i++) {
    if ($i % 2 == 0) { // verifica se o número é par
        echo "$i é par <br>";
    } else {
        echo "$i é impar <br>";
    }
}
?>