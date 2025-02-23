<?php
    require_once 'AcoesVideo.php';
    class Video implements AcoesVideo{
        //Atributos
            private $titulo, $views, $avaliacao, $curtidas, $reproduzindo;
        
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
                    $this->avaliacao = 1;
                    $this->views =0;
                    $this->curtidas = 0;
                    $this->reproduzindo = false;
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
                    $media = ($this->avaliacao + $avaliacao)/$this->views;
                    $this->avaliacao = $media;
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
