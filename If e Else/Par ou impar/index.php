<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Par ou impar</title>
</head>
<body>

<?php


$numero = 15;

$parOuImpar = ($numero % 2 == 0);

if($parOuImpar)

{echo $numero . ": O numero é PAR.";} 

else  {echo $numero . ": O numero é ÍMPAR.";}




?>
    
</body>
</html>