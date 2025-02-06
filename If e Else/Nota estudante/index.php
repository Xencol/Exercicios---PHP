<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>nota do estudante</title>
</head>
<body>

<?php


$numero = 7; 

if (is_numeric($numero) && $numero < 4.9) {
    echo "Você foi reprovado.";
} elseif ($numero >= 5 && $numero < 6.9) {
    echo "Você está de recuperação.";
} elseif ($numero >= 7 && $numero < 8.9) {
    echo "Você foi aprovado.";
} elseif ($numero >= 9 && $numero < 10) {
    echo "Você foi aprovado com Distinção.";
} else {
    echo "Número não identificado!";
}

?>

    
</body>
</html>