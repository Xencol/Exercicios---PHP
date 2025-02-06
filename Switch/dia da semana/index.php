<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dia da semana</title>
</head>
<body>
      
<?php 
//condicional switch

$dia = "5";

switch ($dia){

    case "1":
        echo "domingo!";
    break;

    case "2":
          echo "segunda!";
    break;

    case "3":
          echo "terça-feira!";
    break;

    case "4":
          echo "quarta-feira";
    break;

    case "5":
    echo "quinta-feira";
    break;

    case "6":
    echo "sexta-feira";
    break;

    case "7":
    echo "sabado";
    break;

    default:
          echo "dia desconhecido";
    break;
    }


?>
</body>
</html>