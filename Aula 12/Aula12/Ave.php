<?php
    require_once 'Animal.php';
    class Ave extends Animal{
        private $corPena;
        
        //Métodos Específicos
        function fazerNinho(){
            echo '<p>Construindo Ninho</p>';
        }
        
        //Métodos Abstratos
        public function alimentar() {
            echo '<p>Comendo Frutas</p>';
        }
        public function emitirSom() {
            echo '<p>Som de Ave</p>';
        }
        public function locomover() {
            echo '<p>Voando</p>';
        }
        
        //Métodos Especiais
        function getCorPena() {
            return $this->corPena;
        }
        function setCorPena($corPena) {
            $this->corPena = $corPena;
        }
}
