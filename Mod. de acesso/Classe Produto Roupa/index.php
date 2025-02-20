<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produto Roupa</title>
</head>
<body>
    <h2>Produto Roupa</h2>
    <?php


    class ProdutoRoupa{
        public $nome;
        private $codigo;
        public $preco;
 
        public function setNome($nome){
            $this->nome = $nome;
        }
        private function setcodigo($codigo){
            $this->codigo = $codigo;
        }
        public function setPreco($preco){
            $this->preco = $preco;
        }
        public function getNome(){
            return $this->nome;
        }
        private function getcodigo(){
            return $this->codigo;
        }
        public function getPreco(){
            return $this->preco;
        }
        public function setcodigo1($codigo){
            $this->codigo = $codigo;
        }
        public function getcodigo1(){
            return $this->codigo;
        }
    }
      $roupa = new ProdutoRoupa();
    $roupa->setcodigo1(1369);
 
    echo "O código da roupa é: " . $roupa->getcodigo1();

    ?>
</body>
</html>