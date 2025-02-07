<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Processamento de pedidos de compra</title>
</head>
<body>

<?php 

$pedidos = 0;
 
    echo "pedidos: <br>";
 
    do 
    { $pedidos++;
    echo "Processo $pedidos em andamento <br>";}
     
    
    while ($pedidos < 50);
       
    echo "Não temos mais pedidos";


?>
    
</body>
</html>
