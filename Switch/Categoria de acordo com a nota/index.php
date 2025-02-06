<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>categoria de acordo com a nota</title>
</head>
<body>
<?php 
    // variavel nota
    $nota = 7.5; 

    // condicional switch
         switch (true) {
        case (!is_numeric($nota)): 
            echo "Nota invalida, insira novamente .";
            break;
        
        case ($nota >= 7 && $nota <= 10):  
            echo "aprovado!";
            break;

        case ($nota >= 5 && $nota <= 6.9): 
            echo "recuperação!";
            break;

        case ($nota >= 0 && $nota <= 4.9):  
            echo "reprovado!";
            break;

        default: 
            echo "Nota inválida.";
            break;
    }


?>
</body>
</html>