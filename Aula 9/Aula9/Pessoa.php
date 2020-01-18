<?php
    class Pessoa {
        //Atributos
        private $nome;
        private $idade;
        private $sexo;
        
        //Métodos Específicos
        public function fazerAniver(){
            $this->setIdade($this->getIdade()+1);
        }
        
        //Métodos Especiais
        function __construct($nome, $idade, $sexo) {
            $this->setNome($nome);
            $this->setIdade($idade);
            $this->setSexo($sexo);
        }

        function getNome() {
            return $this->nome;
        }
        function getIdade() {
            return $this->idade;
        }
        function getSexo() {
            return $this->sexo;
        }
        function setNome($nome) {
            $this->nome = $nome;
        }
        function setIdade($idade) {
            $this->idade = $idade;
        }
        function setSexo($sexo) {
            $this->sexo = $sexo;
        }
    }
