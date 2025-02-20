<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conta Corrente</title>
</head>
<body>
    <h2>Conta Corrente</h2>
    <?php 
    class ContaCorrente {
        public $numeroConta;
        private $saldo;
        public function setConta(){
            $this->numeroConta . "<BR>";
 
        }
 
        private function setSaldo($saldo){
            $this->saldo = $saldo;
        }
 
        public function getConta(){
            return $this->numeroConta;
           
    }
    public function getSaldo(){
        return $this->saldo;
             
}
    public function atualizarsaldo($novoSaldo){
        $this->setSaldo($novoSaldo);
    }
    }
   
    $conta = new ContaCorrente();
    $conta->setConta(3);
    $conta->atualizarsaldo(1000);
 
    echo "Conta: " . $conta->getConta() . "<BR>";
    echo "Saldo: " . $conta->getSaldo() . "<BR>";
   
    $conta->atualizarsaldo(400);
 
    echo "saldo atualizado: " . $conta->getSaldo() . "<BR>";
    
    ?>
</body>
</html>