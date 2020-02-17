<?php 

    // extends sinaliza que Atendente herda de Funcionários
    class Atendente extends Funcionarios { // php não permite usar funções. Ex. strtolower
        public $conhecimento;
        public $cargo = "Atendente";

        public function atender() {
            
        }

        public function setSalario($hora, $valor) {
            parent::setSalario($hora, $valor);
            $this->salario -= 50;
        }
    }

?>