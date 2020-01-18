<?php
    require_once 'Mamifero.php';
    class Cachorro extends Mamifero{
        //Métodos Específicos
        public function enterrarOsso(){
            echo "<p>Enterrando Osso</p>";
        }
        public function abanarRabo(){
            echo "<p>Abanando o Rabo</p>";
        }        

        //Métodos Abstratos (Sobreposição)
        public function emitirSom() {
            echo "<p>Au!Au!Au!</p>";
        }
    }
