<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>for</title>
</head>
<body>

    <h2> Tabuada do 8. </h2>
   
   <?php
    

    for ($x = 1; $x <= 10; $x++)
    
    echo "$x x 8 = " . ($x * 8) . "<br><br>";
   
    ?>

    <h2> Calculando Média. </h2>

    <?php
    
    $numeros = [10, 10, 10, 10, 10, 10, 10, 10, 10, 10];
    $soma = 0;

    for($i = 0; $i < 10; $i++) {
    
    $soma += $numeros [$i];}

    $media = $soma /10;

    Echo "A média desses números é igual à $media. ";

    
    ?>
</body>
</html>