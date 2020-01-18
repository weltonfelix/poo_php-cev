<?php
    class Estudar {
        var $comecou;
        var $duracao;
        var $materia;
        var $qer;//Quantidade de Exercícios Resolvidos
                
        function parar() {
            $this->comecou = false;
            echo '<br/>Parando de estudar...<br/>';    
        }
        function comecar() {
            echo "<br/>Começando a estudar $this->materia...<br/>";    
            $this->comecou = true;
        }
        function abrirlivro(){
            echo "<br/>Abrindo livro de $this->materia...<br/>";
        }
    }
