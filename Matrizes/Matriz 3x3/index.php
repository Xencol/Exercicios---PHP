<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matriz 3x3</title>
</head>
<body>
    <h2>Matriz 3x3</h2>
    <?php 
    
    
$matriz = array();


for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 3; $j++) {
        $matriz[$i][$j] = rand(1, 100); 
    }
}
 
     $soma = 0;


    for ($i = 0; $i < 3; $i++) {
        for ($j = 0; $j < 3; $j++) {
            $soma += $matriz[$i][$j];
        }
    }
 
    echo "<br><br>";
    print_r($matriz);
    echo "<br><br>";
    echo "A soma dos elementos da matriz é : " . $soma;
  
  
  
    ?>
</body>
</html>