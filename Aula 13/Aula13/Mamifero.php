<?php
    require_once 'Animal.php';
    class Mamifero extends Animal{
        protected $corPelo;

        //Métodos Abstratos (SObreposição)
        public function emitirSom() {
            echo "<p>Som de Mamífero</p>";
        }
}
