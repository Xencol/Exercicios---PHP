<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foreach</title>
</head>
<body>

<h2> Peças do Carro. </h2>

<?php



$pecasDeCarro = ["Roda",
                 "Motor",
                 "Escapamento",                            
                 "Bateria",
                 "Volante",
                 "Embreagem",
                 "Radiador",
                 "Carburador",
                 "chasi",
                 "Alternador"];
 
 foreach ($pecasDeCarro as $pecasDeCarro) 

 echo $pecasDeCarro . "<br><br>"
 


?>

<h2> Dados do Gato. </h2>

<?php

$gato = ["Nicolas" => 2];
$gato2 = ["Branco" => 230 ]; 

foreach ($gato as $nome => $idade)
{ echo "$nome é um gato com $idade anos de idade. ";}



foreach ($gato2 as $cor => $preco)
{ echo "É $cor e custa R$ " . number_format($preco, 2,',','.');}

?>
    
</body>
</html>