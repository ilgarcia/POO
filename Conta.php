<?php

    abstract class Conta {
        protected $agencia;
        protected $conta;
        protected $saldo;

        public function __construct($agencia, $conta, $saldo){
            $this -> agencia = $agencia;
            $this -> conta = $conta;
            $this -> saldo = $saldo;
        //    echo "objeto criado";
        }
        
        public function getDetalhes(){
            return "Agência: {$this -> agencia } | Conta: {$this -> conta } | Saldo: {$this -> saldo }";
        }
        
        public function depositar($valor){
            $this -> saldo += $valor;
            echo "Depósito: {$valor} | Saldo atual: {$this -> saldo}";
        }
        
       /* public final function depositar($valor){
            $this -> saldo += $valor;
            echo "Depósito: {$valor} | Saldo atual: {$this -> saldo}";
        } 
        
        public abstract function saque($valor){
        }
        */
    } 
    
    
    final class Poupanca extends Conta {
        
        public function saque($saque){
            if($this -> saldo >= $saque):
                $this -> saldo -= $saque;
                echo "Saque de: {$saque} | Saldo atual: {$this -> saldo}";
            else:
                echo "Saque não autorizado | Saldo atual: {$this -> saldo}";
            endif;    
        }
    }   
    
    final class Corrente extends Conta {
        protected $limite;
        
        public function __construct($agencia, $conta, $saldo, $limite){
            parent:: __construct($agencia, $conta, $saldo);
            $this -> limite = $limite;
        }
        
        public function saque($saque){
            if(($this -> saldo + $this -> limite) >= $saque):
                $this -> saldo -= $saque;
                echo "Saque de: {$saque} | Saldo atual: {$this -> saldo}";
            else:
                echo "Saque não autorizado | Saldo atual: {$this -> saldo} | Limite: {$this -> limite}";
            endif;    
        }
    }
    
    
    //$c1 = new Poupanca(2333, 5555444, 90);
    //$c2 = new Conta(2333, 33333444, 90);
    $c1 = new Corrente(2333, 5555444, 90, 500);
    $c1 -> depositar(1500);
    $c1 -> saque(160);
    echo $c1 -> getDetalhes();
   // echo $c2 -> getDetalhes();
?>
