<?php
    require_once 'Animal.php';
    class Peixe extends Animal{
        private $corEscama;
        
        //Métodos Específicos
        function soltarBolha(){
            echo '<p>Soltou uma Bolha</p>';
        }
        
        //Métodos Abstratos
        public function alimentar() {
            echo '<p>Comendo Substâncias</p>';
        }
        public function emitirSom() {
            echo '<p>Peixe não faz som</p>';
        }
        public function locomover() {
            echo '<p>Nadando</p>';
        }
        
        //Métodos Especiais
        function getCorEscama() {
            return $this->corEscama;
        }
        function setCorEscama($corEscama) {
            $this->corEscama = $corEscama;
        }
}
