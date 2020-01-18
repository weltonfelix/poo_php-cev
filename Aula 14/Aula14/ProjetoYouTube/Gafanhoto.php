<?php
    require_once 'Pessoa.php';
    class Gafanhoto extends Pessoa{
        //Atributos
            private $login, $totAssistido;
            
        //Métodos Específicos
            public function assistirMaisUm(){
                $this->totAssistido++;
            }
            
        //Métodos Especiais
            //Construtor
                public function __construct($nome, $idade, $sexo, $login) {
                    parent:: __construct($nome, $idade, $sexo);
                    $this->login = $login;
                    $this->totAssistido = 0;
                }
                
            //Getters e Setters
                public function getLogin() {
                    return $this->login;
                }
                public function getTotAssistido() {
                    return $this->totAssistido;
                }
                public function setLogin($login) {
                    $this->login = $login;
                }
                public function setTotAssistido($totAssistido) {
                $this->totAssistido = $totAssistido;
            }
}
