<?php
    require_once 'Pessoa.php';
    class Professor extends Pessoa{
        private $especialidade;
        private $salario;
        
        public function receberAumento($valor){
            $this->salario += $valor;
        }
        
        //Métodos Especiais
        function getEspecialidade() {
            return $this->especialidade;
        }
        function getSalario() {
            return $this->salario;
        }
        function setEspecialidade($especialidade) {
            $this->especialidade = $especialidade;
        }
        function setSalario($salario) {
            $this->salario = $salario;
        }
    }
