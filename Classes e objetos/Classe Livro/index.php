<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>livro</title>
</head>
<body>
    <h2>Livro</h2>
    <?php 
    
    class Livro{
        public $titulo;
        public $autor;
        public $anoPublicacao;
    
    
    public function __construct($titulo, $autor, $anoPublicacao){
        
        $this -> titulo = $titulo;
        $this -> autor = $autor;
        $this -> anoPublicacao = $anoPublicacao;
    }


        public function exibirTitulo(){
              
        echo "Título: $this->titulo <br><br>";}
        
        public function exibirAutor(){
        
        echo "Autor: $this->autor <br><br>";}

        public function exibirAnoPublicacao(){
        
        echo "Ano de Publicação: $this->anoPublicacao <br><br>" . "<br><br>";}


        public function exibirDetalhes(){

            $this -> exibirTitulo();
            $this -> exibirAutor();
            $this -> exibirAnoPublicacao();

        }
    }

        
    
    $livro1 = new Livro ("O Pequeno Príncipe", "Antoine de Saint-Exupéry", 1943);
    $livro2 = new Livro ("O Senhor dos Anéis", "J.R.R. Tolkien", 1954);
    $livro3 = new Livro ("Dom Casmurro", "Machado de Assis", 1899);

    $livro1 -> exibirDetalhes();
    $livro2 -> exibirDetalhes();
    $livro3 -> exibirDetalhes();


    ?>
    
</body>
</html>