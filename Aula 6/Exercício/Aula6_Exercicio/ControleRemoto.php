<?php
    interface ControleRemoto {
        public function onOff();//Botão Ligar/Desligar
        public function mute();//Botão Mute
        public function volMais();//Botão Volume +
        public function volMenos();//Botão Volume -
        public function menu();//Botão Abrir/Fechar Menu
        public function chMais();//Botão Canal +
        public function chMenos();//Botão Canal -
        public function netflix();//Botão Abrir Netflix (para fechar, você deve usar o botão voltar)
        public function voltar();//Botão Voltar
    }
