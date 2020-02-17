<?php
    class Funcionarios {
        public $nome;
        public $idade;
        private $salario;
        private $cargo;

        public function setSalario($hora, $valor) {
            // O salário vai ser atribuído à classe
            $this->salario = $hora * $valor;
        }
    }
?>