<?php
// Your code here!
    class Product {
        private $descricao;
        private $preco;
        
        public function __construct(){
            echo "objeto criado";
        }
        
        public function getDetalhes(){
            return "O produto {$this -> descricao } custa {$this -> preco} reais.";
        }
        
        public function setDescricao($texto){
            $this -> descricao = $texto;
        }
        
        public function setPreco($valor){
            $this -> preco = $valor;
        }
        
        public function getDescricao(){
            return $this -> descricao;
        }
        
        public function getPreco(){
            return $this -> preco;
        }
    }
    
    $p1 = new Product;
    $p1 -> setDescricao('Livro'); 
    $p1 -> setPreco(5000);
    //$p1 -> descricao = 'Livro'; 
    //$p1 -> preco = '5000';
    //var_dump($p1)
    echo $p1 -> getDetalhes();
    
?>
