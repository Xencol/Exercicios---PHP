<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculo de preço com taxa de entrega</title>
</head>
<body>

<?php

$valorProduto = 1950;

$valorFinal = ( $valorProduto + ($valorProduto * 0.15)) - (( $valorProduto * 0.15) * 0.20);


if ($valorProduto >= 1000){
    echo "você recebeu um desconto de 20%. O valor final ficou de: " . number_format($valorFinal, 2, ',', '.');
}
else {
    echo "O valor final ficou de: " .  number_format($valorProduto, 2, ',', '.');
}


?>
    
</body>
</html>
