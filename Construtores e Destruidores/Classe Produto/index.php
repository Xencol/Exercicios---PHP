<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produto</title>
</head>
<body>
    <h2>Produto</h2>
    <?php

    class Produto{
    public $nome;
    public $preco;
    public $quantidade;
   
    public function __construct($nome, $preco, $quantidade){
        $this -> nome = $nome;
        $this -> preco = $preco;
        $this -> quantidade = $quantidade;}

        public function exibirNome(){
            echo "Nome: $this->nome <br><br>";
        
}
        public function exibirPreco(){
            echo "Preço: R$ " . number_format($this->preco,2,',','.') . "<br><br>";
}

        public function exibirQuantidade(){
            echo "Quantidade: $this->quantidade <br><br>";

}

    public function Desconto(){ 

        $desconto = $this -> preco * 0.10;
        $precoDesconto = $this -> preco - $desconto;
        echo "Desconto de 10%: R$ " . number_format($precoDesconto,2,',','.') . "<br><br>";
    }

    public function exibirInformacoes(){
        $this -> exibirNome();
        $this -> exibirPreco();
        $this -> exibirQuantidade();
        $this -> Desconto();
    }
}
    

    $produto1 = new Produto("Camiseta", 80, 10);

    $produto1 -> exibirInformacoes();

      
    ?>
</body>
</html>