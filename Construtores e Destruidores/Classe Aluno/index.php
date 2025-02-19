<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aluno</title>
</head>
<body>

<h2>Alunos</h2>

<?php
 
class Aluno{

    public $nome;
    private $matricula;
    public $curso;

    public function __construct($nome, $matricula, $curso){

        $this -> nome = $nome;
        $this -> matricula = $matricula;
        $this -> curso = $curso;
    
    }

    public function exibirNome(){
              
        echo "Nome: $this->nome <br><br>";}
        
        private function exibirMatricula(){
        
        echo "Matricula: $this->matricula <br><br>";}

        public function exibirCurso(){
        
        echo "Curso: $this->curso <br><br>" . "<br><br>";}

        public function exibirDetalhes(){

        $this -> exibirNome();
        $this -> exibirMatricula();
        $this -> exibirCurso();

    }
   
         public function __destruct(){

        echo "Aluno removido: <br><br>";  
        $this -> exibirDetalhes();
  
}
      
}

    
        
    

    $aluno1 = new Aluno ("Willian", 489512, "Técnico em Informática");
    $aluno2 = new Aluno  ("Luis Miguel", 489513, "Técnico em Informática");
    $aluno3 = new Aluno ("João", 489514, "Técnico em Informática");

    $aluno1 -> exibirDetalhes();
    $aluno2 -> exibirDetalhes();
    $aluno3 -> exibirDetalhes();

    

?>
    
</body>
</html>