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
<h1>Nota de Alunos</h1>
<br>
<p>Faça um programa que classifique a nota de um estudante. O programa deve receber a nota de um estudante (de 0 a 10) e, com base nessa 
nota, classificar o desempenho do estudante: <br><br>
De 0 a 4.9: "Reprovado" <br>
De 5 a 6.9: "Recuperação" <br>
De 7 a 8.9: "Aprovado" <br>
De 9 a 10: "Aprovado com Distinção"</p>
</div>

<div class="flexform">
    <form action="./Notas.php" method="post">
        <div>
            <label for="nota">Insira sua nota</label>
            <input type="number" name="num"  step="0.1" required>
        </div>

        <div>
            <input type="submit">
        </div>
    </form>
</div>

<div class="flexform">
<?php 

if(isset($_POST["num"])) {$nota = $_POST["num"];}

if(isset($_POST["num"])) {if ($nota >= 0 && $nota <= 4.9) {
    echo "Reprovado :(";
 } else if ($nota >=5 && $nota <= 6.9) {
    echo "Recuperação..."; 
} else if ($nota >= 7 && $nota <= 8.9) {
    echo "Aprovado."; 
} else if ($nota >= 9 && $nota <= 10) {
    echo "Aprovado com Distinção!"; 
} else {
    echo "Apenas notas de 0 a 10!";
}
}
?>
</div>

</body>