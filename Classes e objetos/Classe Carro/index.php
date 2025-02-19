<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carro</title>
</head>
<body>

<h2>Carro</h2>

<?php

   

class Carro{
    public $modelo;
    public $marca;
    public $ano;
    public $cor;
    public $preco;

    public function __construct($modelo, $marca, $ano, $cor, $preco){

        $this -> modelo = $modelo;
        $this -> marca = $marca;
        $this -> ano = $ano;
        $this -> cor = $cor;
        $this -> preco = $preco;}

    public function exibirModelo(){
        
        echo "Modelo: $this->modelo <br><br>";
    }

    public function exibirMarca(){
        
        echo "Marca: $this->marca <br><br>";
    }

    public function exibirAno(){
        
        echo "Ano: $this->ano <br><br>";
    }

    public function exibirCor(){
        
        echo "Cor: $this->cor <br><br>";
    }

    public function exibirPreco(){
        
        echo "Preço: R$ " .  number_format($this->preco,2,',','.') . "<br><br>";
    }
};

    

     $carro1 = new Carro ("Suv", "Citroën", 2023, "Rubro", 85000 ); 

     $carro1 -> exibirModelo();
     $carro1 -> exibirMarca();
     $carro1 -> exibirAno();
     $carro1 -> exibirCor();
     $carro1 -> exibirPreco();


?>

    
</body>
</html>