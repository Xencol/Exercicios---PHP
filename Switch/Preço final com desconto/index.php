<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculando preço com codigo de desconto</title>
</head>
<body>
<h2>
<?php 

$preco = 15000;
$codigo = 4;

$d1 = $preco - ($preco * 0.1);
$d2 = $preco - ($preco * 0.2);
$d3 = $preco - ($preco * 0.3);

switch($codigo)

{case 1 : echo "Seu desconto é de 10%, o valor do produto será: " .  number_format($d1, 2,',','.'); break;
 case 2 : echo "Seu desconto é de 20%, o valor do produto será: " .  number_format($d2, 2,',','.'); break; 
 case 3 : echo "Seu desconto é de 30%, o valor do produto será: " .  number_format($d3, 2,',','.'); break; 
 default: echo "Seu código não existe."; break; 
}
?>
</h2>
</body>
</html>