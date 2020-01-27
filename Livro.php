<?php
// Your code here!
    class Livro {
        public $nome;
        public $descricao;
        public $preco;
        
        public function getDetalhes(){
            return "O livro {$this -> nome }, de {$this -> descricao }, custa {$this -> preco} reais.";
        }
    }
    
    $p1 = new Livro;
    $p1 -> nome = 'harry potter'; 
    $p1 -> descricao = 'fantasia'; 
    $p1 -> preco = '5000';

    echo $p1 -> getDetalhes();
      
?>