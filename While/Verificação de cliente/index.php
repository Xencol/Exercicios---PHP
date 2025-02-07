<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

$Quebra = "<br><br>";
    
    $tentativasMaximas = 3;  
    
    $tentativas = 0; 
    
    $senhaCorreta = "Kahoot";
    
    while ($tentativas < $tentativasMaximas) {
        
        // Solicitar ao usuário a senha
       
        $senha = readline("Kahoot");
    
        
        
        if ($senha == $senhaCorreta) {
          
            echo "Acesso permitido." . $Quebra;
            
            break;  
        } 
        
        else {
            $tentativas++;
            
            echo "Senha incorreta. Tentativas restantes: ". ($tentativasMaximas - $tentativas) . $Quebra ;
        }
    }
    
    if ($tentativas == $tentativasMaximas) {
       
        echo "Número máximo de tentativas atingido. Acesso bloqueado. ";
    }
    
?>

</body>
</html>