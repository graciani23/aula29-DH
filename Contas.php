<?php
    abstract class Contas {
        public $saldo;

        // __ métodos mágicos do php
        // o construct deverá ser o primeiro método dos métodos - boa prática
        // o construct recebe 1000 e repassa para o saldo
        public function __construct($saldoParam) {
            $this->saldo = $saldoParam;
        }

        public function depositar($valor) {
            $this->saldo += $valor;
        }

        public function sacar($valor) {
            if($this->saldo >= $valor) {
                $this->saldo -= $valor;
            } else {
                echo "É impossível sacar.";
                die;
            }
        }

        public function consultarSaldo() {
            return $this->saldo;
        }
    }
?>