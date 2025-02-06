<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pode votar</title>
</head>
<body>
<?php 

//condicional 
$idade = 16;

if ($idade < 16) {
    echo "Você não pode votar.";
} else if ($idade >= 16 && $idade < 18) {
    echo "Você pode votar, mas não é obrigado.";
} else if ($idade >= 18) {
    echo "Você pode votar e, é obrigado a votar.";
}
?>
</body>
</html>