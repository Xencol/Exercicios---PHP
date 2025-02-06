<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Preço do ingresso</title>
</head>
<body>

<?php




$hora = 23.45;

$valorFormatado = number_format($hora, 2, ':', '.');



if ($hora >= 10.00 && $hora < 12.00) {
echo "As $valorFormatado horas seu ingresso será 10R$";

} else if ($hora >= 12.01 && $hora < 17.00) {
    echo "As $valorFormatado horas seu ingresso será 20R$";

} else if ($hora >= 17.01 && $hora < 22.00) {
    echo "As $valorFormatado horas seu ingresso será 30R$";

} else if ($hora >= 22.01) {
    echo "As $valorFormatado horas seu ingresso será 40R$";

} else {
    echo "Não temos igressos a esse horario";
}



?>
    
</body>
</html>