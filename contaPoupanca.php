<?php 
    require 'Contas.php';
    // extends sinaliza que Atendente herda de Funcionários
    class ContaPoupanca extends Contas { // php não permite usar funções. Ex. strtolower
        public $juros;

        public function recolherJuros() {
            
        }

    }

?>