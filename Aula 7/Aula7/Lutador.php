<?php
    class Lutador {
        //Atributos
        private $nome, $nacionalidade, $idade, $altura, $peso, $categoria, $vitorias, $derrotas, $empates;
        
        //Métodos Especiais
        function __construct($nome, $nacionalidade, $idade, $altura, $peso, $vitorias, $derrotas, $empates) {
            $this->setNome($nome);
            $this->setNacionalidade($nacionalidade);
            $this->setIdade($idade);
            $this->setAltura($altura);
            $this->setPeso($peso);
            $this->setVitorias($vitorias);
            $this->setDerrotas($derrotas);
            $this->setEmpates($empates);
        }
        
        //Getters e Setters
        private function getNome() {
            return $this->nome;
        }
        private function getNacionalidade() {
            return $this->nacionalidade;
        }
        private function getIdade() {
            return $this->idade;
        }
        private function getAltura() {
            return $this->altura;
        }
        private function getPeso() {
            return $this->peso;
        }
        private function getCategoria() {
            return $this->categoria;
        }
        private function getVitorias() {
            return $this->vitorias;
        }
        private function getDerrotas() {
            return $this->derrotas;
        }
        private function getEmpates() {
            return $this->empates;
        }
        private function setNome($nome) {
            $this->nome = $nome;
        }
        private function setNacionalidade($nacionalidade) {
            $this->nacionalidade = $nacionalidade;
        }
        private function setIdade($idade) {
            $this->idade = $idade;
        }
        private function setAltura($altura) {
            $this->altura = $altura;
        }
        private function setPeso($peso) {
            $this->peso = $peso;
            $this->setCategoria();
        }
        private function setCategoria() {
            $peso = $this->getPeso();
            if ($peso < 52.2){
                $this->categoria = 'Inválido';
            }
            elseif ($peso <= 70.3) {
                $this->categoria = 'Leve';
            }
            elseif ($peso<=83.9) {
                $this->categoria = 'Médio';
            }
            elseif ($peso <= 120.2){
                $this->categoria = 'Pesado';
            }
            else{
                $this->categoria = 'Inválido';
            }
        }
        private function setVitorias($vitorias) {
            $this->vitorias = $vitorias;
        }
        private function setDerrotas($derrotas) {
            $this->derrotas = $derrotas;
        }
        private function setEmpates($empates) {
            $this->empates = $empates;
        }
        
        //Métodos Específicos
        public function apresentar(){
            echo '<p>-----------------------------------------------------------------------------------------</p>';
            echo '<p>CHEGOU A HORA! O lutador ' . $this->getNome();
            echo ' veio diretamente de ' . $this->getNacionalidade();
            echo ', tem ' . $this->getIdade() . ' anos e pesa ' . $this->getPeso() . 'Kg';
            echo '<br>Ele tem ' . $this->getVitorias() . ' vitórias, ';
            echo $this->getDerrotas() . ' derrotas e ' . $this->getEmpates() . ' empates.</p>';
        } 
        public function status(){
            echo '<p>-----------------------------------------------------------------------------------</p>';
            echo '<p>' . $this->getNome() . ' é um peso ' . $this->getCategoria();
            echo ', já ganhou ' . $this->getVitorias() . ' vezes,';
            echo ' perdeu ' . $this->getDerrotas() . ' vezes e ';
            echo 'empatou '. $this->getEmpates(). ' vezes!';
        }
        public function ganharLuta(){
            $this->setVitorias($this->getVitorias() + 1);
        }
        public function perderLuta(){
            $this->setDerrotas($this->getDerrotas() + 1);
        }
        public function empatarLuta(){
            $this->setEmpates($this->getEmpates() + 1);
        }
    }
