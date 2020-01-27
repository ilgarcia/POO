<?php
// Your code here!
    class Fabricante {
        private $nome;
        
        public function __construct($nome){
            $this -> nome = $nome;
        }
        
        public function getNome(){
            return $this -> nome;
        }
    }
    
    class Product {
        private $descricao;
        private $preco;
        private $fabricante;
        
        public function __construct($descricao, $preco, Fabricante $fabricante){
            $this -> descricao = $descricao;
            $this -> preco = $preco;
            $this -> fabricante = $fabricante;
        //    echo "objeto criado";
        }
        
        public function getDetalhes(){
            return "O produto {$this -> descricao } custa {$this -> preco} reais. Fabricante {$this -> fabricante -> getNome()}";
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
    
    $f1 = new Fabricante('Editora B');
    $p1 = new Product('Livro', 40, $f1);

    echo $p1 -> getDetalhes();
    
?>