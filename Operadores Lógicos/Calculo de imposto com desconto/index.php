<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcule imposto com desconto</title>
</head>
<body>

<?php 

$valorCompra = 630;

$valorFinalComDesconto = ( $valorCompra - ($valorCompra * 0.10)) + ( $valorCompra * 0.08 );


if ($valorCompra >= 500){
    echo "você recebeu um desconto de 10%. O valor final ficou de: " . number_format($valorFinalComDesconto, 2, ',', '.');
}
else {
    echo "O valor final ficou de: " .  number_format($valorCompra, 2, ',', '.');
}

?>
    
</body>
</html>