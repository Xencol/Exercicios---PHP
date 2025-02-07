<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de atutenficação de funcionário</title>
</head>
<body>

<?php

$quebra = "<br><br>";

$usuario = [
   
    "Premissao" => "Permitido",
    "Cadastro" => "Cadastrado",
    "Adiministrador" => "adm"
];

// Função para verificar permissões

function verificarPermissao($usuario) {
    
// Verifica se o usuário tem permissão
    
    if (($usuario["Premissao"] == "Permitido" && $usuario["Cadastro"] == "Cadastrado") || $usuario["Adiministrador"] == "adm") {
        return true;
    }
    return false;
}

// Verifica e exibe a mensagem correspondente

if (verificarPermissao($usuario)) {
    echo "Você tem permissão" . $quebra;
} else {
    echo "Você não tem permissão" . $quebra;
}

?>
    
</body>
</html>