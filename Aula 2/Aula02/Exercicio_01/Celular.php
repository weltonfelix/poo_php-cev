<?php
    class Celular {
        var $cor;
        var $tamanho_tela;
        var $camera_mp;
        var $capa;
        var $ligado;
        
        function ligar(){
            $this->ligado = true;
            echo 'Ligando...<br/>';
        }
        function desligar(){
            $this->ligado = false;
            echo 'Desligando...<br/>';
        }
        function foto(){
            if ($this->ligado == true) {
                echo 'Tirando foto...<br/>';
            }
            elseif ($this->ligado == false) {
                echo 'ERRO! Impossível tirar foto, celular desligado.<br/>';
            }
        }
        function colocar_capa(){
            $this->capa = true;
            echo '-Celular com capa-<br/>';
        }
        function tirar_capa(){
            $this->capa = false;
            echo '-Celular sem capa-<br/>';
        }
}
