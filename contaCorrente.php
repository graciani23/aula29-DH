<?php 
    require 'Contas.php';
    // extends sinaliza que Atendente herda de Funcionários
    class ContaCorrente extends Contas {
        protected $chequeEspecial = 200;

        // public function __construct($saldo, $limite) {
        //     parente::__construct($saldo);
        // }
        

        public function depositarCheque($limite) {

        }

        public function sacar($valor) {
            $saldoComLimite = $this->saldo + $this->chequeEspecial;
            if ($saldoComLimite >= $valor) {
                $this->saldo -= $valor;
            } else {
                echo "É impossível sacar.";
                die;
            }
        }
    }

?>