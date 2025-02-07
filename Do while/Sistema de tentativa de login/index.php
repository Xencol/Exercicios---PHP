<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Sistema de tentativa de login</title>
</head>
<body>


<?php



session_start();  // Inicia a sessão

if (!isset($_SESSION['tentativas'])) {
    $_SESSION['tentativas'] = 3;  // Inicializa as tentativas restantes
}

$senha_correta = "Kahoot";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $senha = $_POST['senha'];

    do {
        switch (true) {
            case ($senha == $senha_correta):
                echo "Acesso concedido!";
                session_destroy();  // Destroi a sessão após o acesso concedido
                break 2;  // Sai do switch e do do...while

            case ($_SESSION['tentativas'] <= 0):
                echo "Acesso negado. Você excedeu o número máximo de tentativas.";
                session_destroy();  // Destroi a sessão quando as tentativas esgotam
                break 2;  // Sai do switch e do do...while

            default:
                $_SESSION['tentativas']--;  // Decrementa o número de tentativas
                echo "Senha incorreta. Tentativas restantes: " . $_SESSION['tentativas'] . "<br>";
                break;  // Só sai do switch, mas o do...while continua se ainda houver tentativas
        }
    } while ($_SESSION['tentativas'] > 0);  // O loop continua enquanto houver tentativas
}
?>

<!-- Formulário HTML -->
<form method="POST">
    <label for="senha">Digite a senha:</label>
    <input type="password" name="senha" id="senha" required>
    <input type="submit" value="Entrar">
    
</form>

</body>
</html>