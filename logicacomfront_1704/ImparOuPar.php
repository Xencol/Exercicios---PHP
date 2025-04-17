<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Desconto</title>
    <link rel="stylesheet" href="./CSS/Calc.css">
</head>
<body>

<div id="navega">
    <button onclick="document.location='./CalcDesc.php'" class="bnav">Desconto</button>
    <button onclick="document.location='./ImparOuPar.php'" class="bnav">Ímpar ou Par</button>
    <button onclick="document.location='./Notas.php'" class="bnav">Notas de Alunos</button>
</div>

<div class="enun">
<h1>Ímpar ou par</h1>
<br>
<p>Faça um programa que verifique se um número é par ou ímpar
O programa deve receber um número inteiro e verificar se ele é par ou ímpar. Se o 
número for par, o programa deve imprimir "O número é par". Caso contrário, deve 
imprimir "O número é ímpar".</p>
</div>

<div class="flexform">
    <form action="./ImparOuPar.php" method="post">
        <div>
            <label for="numero">Insira um número inteiro</label>
            <input type="number" name="numero" required>
        </div>

        <div>
            <input type="submit">
        </div>
    </form>
</div>

<div class="flexform">
    <?php

    if(isset($_POST["numero"])){$num = $_POST["numero"];}

    if(isset($_POST["numero"])){if ($num % 2 == 0) {
        echo "O número é par!"; 
    } else {
        echo "O número é ímpar!";
    }}
    ?>
</div>

</body>