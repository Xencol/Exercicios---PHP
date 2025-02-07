<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contagem de estoque</title>
</head>
<body>

<?php

$estoque = 100;
$venda = 0;

while($venda < 100){

    $venda++;
    $estoque--;

    echo "vendi: " . $venda . "." ." Ainda restam em estoque: " . $estoque . "<br><br>";



}

?>
    
</body>
</html>