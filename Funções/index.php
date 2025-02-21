<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Função</title>
</head>
<body>
<h2> Valor da compra e calculo e desconto. </h2>

<?php

function desconto($v , $p){
    
    return $v * $p;

}

echo "<br><br>";

$desconto = desconto(1500 , 0.15);

echo "Seu desconto é de R$ " . number_format($desconto, 2, ',' , '.');

function precoFinal($v , $p){
    
    return $v - $p;

}

echo "<br><br>";

$precoFinal = precoFinal(1500 , 225 );

echo "O valor final da compra é de R$ " . number_format($precoFinal, 2, ',' , '.');

?>

<h2> Determinando número primo. </h2>


<?php 
function NumeroPrimo($numero) {
    if ($numero <= 1) 
    
    {return false;}

    for ($i = 2; $i < $numero; $i++) 
    
    {if ($numero % $i == 0) 
        
        {return false;}}
   
        return true;}
   
    $numero = 7; if (NumeroPrimo($numero)) {
    
    echo " O número $numero  é primo.";} 
    
    else {echo " O número $numero  não é primo.";}
 
    
    ?>
 




    
</body>
</html>
