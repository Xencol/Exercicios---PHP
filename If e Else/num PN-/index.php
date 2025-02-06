<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Positivo ou negativo</title>
</head>
<body>
<?php 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // formulário numerico
    $numero = htmlspecialchars($_POST['numero']);  // Obtém o número do formulário
    
   
    // Exibe o número
    echo "<h2>seu numero é $numero.</h2>";

    // Verifica se o número é positivo ou negativo
    if ($numero > 0) {
        echo 'Seu número é Positivo.';
    } 
    else if ($numero < 0) {
        echo 'Seu número é Negativo.';
    } 
    else {
        echo 'Seu número é Zero.';
    }
} else {
    echo "Método de requisição inválido.";
}
?>
    
</body>
</html>