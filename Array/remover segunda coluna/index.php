<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php

$array = ["Caleb", "Victor", "Lucas", "Alan", "Vitor"];

echo "Nomes: ";

print_r($array);
unset($array[0]);

echo "<br><br>";
echo "Caleb foi removido";
echo "<br><br>";

print_r($array);

?>

</body>
</html>
