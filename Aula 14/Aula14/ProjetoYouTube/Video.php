<?php
    require_once 'AcoesVideo.php';
    class Video implements AcoesVideo{
        //Atributos
            private $titulo, $avaliacao, $views, $curtidas, $reproduzindo;
        
        //Métodos Abstratos Implementados
            public function like() {
                $this->curtidas++;
            }
            public function pause() {
                $this->setPlay(false);
            }
            public function play() {
                $this->setPlay(true);
            }
        
        //Métodos Especiais
            //Construtor
                public function __construct($titulo) {
                    $this->titulo = $titulo;
                    $this->setAvaliacao(1);
                    $this->setViews(0);
                    $this->setCurtidas(0);
                    $this->setReproduzindo(false);
                }

            //Getters e Setters
                public function getTitulo() {
                    return $this->titulo;
                }
                public function getAvaliacao() {
                    return $this->avaliacao;
                }
                public function getViews() {
                    return $this->views;
                }
                public function getCurtidas() {
                    return $this->curtidas;
                }
                public function getReproduzindo() {
                    return $this->reproduzindo;
                }
                public function setTitulo($titulo) {
                    $this->titulo = $titulo;
                }
                public function setAvaliacao($avaliacao) {
                    $this->avaliacao = $avaliacao;
                }
                public function setViews($views) {
                    $this->views = $views;
                }
                public function setCurtidas($curtidas) {
                    $this->curtidas = $curtidas;
                }
                public function setReproduzindo($reproduzindo) {
                $this->reproduzindo = $reproduzindo;
            }
}
