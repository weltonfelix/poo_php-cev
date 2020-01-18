<?php
    require_once 'Pessoa.php';
    require_once 'Publicacao.php';
    class Livro implements Publicação{
        //Atributos
        private $titulo;
        private $autor;
        private $totPaginas;
        private $pagAtual;
        private $aberto;
        private $leitor;
        
        //Métodos Específicos
        public function detalhes(){
            //echo '<p>--------------------------------</p>';
            echo '<hr><p>Livro '. $this->getTitulo(). ' escrito por ';
            echo $this->getAutor();
            echo '<br>Páginas: '. $this->getTotPaginas(). ' atual '. $this->getPagAtual(). '<br>';
           // echo 'Página Atual: '. $this->getPagAtual(). '<br>';
           // echo 'Está aberto?: '. (($this->getAberto())? 'Sim':'Não'). '<br>';
            echo 'Sendo lido por '. $this->getLeitor()->getNome(). '</p>';
        }

        //Métodos Especiais
        function __construct($titulo, $autor, $totPaginas, $leitor) {
            $this->setTitulo($titulo);
            $this->setAutor($autor);
            $this->setTotPaginas($totPaginas);
            $this->setPagAtual(0);
            $this->setAberto(false);
            $this->setLeitor($leitor);
        }

        function getTitulo() {
            return $this->titulo;
        }
        function getAutor() {
            return $this->autor;
        }
        function getTotPaginas() {
            return $this->totPaginas;
        }
        function getPagAtual() {
            return $this->pagAtual;
        }
        function getAberto() {
            return $this->aberto;
        }
        function getLeitor() {
            return $this->leitor;
        }
        function setTitulo($titulo) {
            $this->titulo = $titulo;
        }
        function setAutor($autor) {
            $this->autor = $autor;
        }
        function setTotPaginas($totPaginas) {
            $this->totPaginas = $totPaginas;
        }
        function setPagAtual($pagAtual) {
            $this->pagAtual = $pagAtual;
        }
        function setAberto($aberto) {
            $this->aberto = $aberto;
        }
        function setLeitor($leitor) {
            $this->leitor = $leitor;
        }

        //Métodos Abstratos
        public function abrir() {
            $this->setAberto(true);
        }
        public function avancarPag() {
            if ($this->getAberto() && $this->getPagAtual()< $this->getTotPaginas()){
                $this->setPagAtual($this->getPagAtual()+1);
            }
            elseif($this->getAberto()){
                echo '<p>Este livro não tem mais páginas</p>';
            }
            else{
                echo '<p>Este livro não está aberto</p>';
            }
        }
        public function fechar() {
            if ($this->getAberto()){
                $this->setAberto(false);
            }
            else {
                echo '<p>O livro já está fechado</p>';
            }
        }
        public function folhear($p) {
            $pa = intval($p);
            if ($this->getAberto() && ($pa>=1 && $pa<=$this->getTotPaginas())){
                echo '<p>Folheando para a página '. $pa. '...</p>';
                $this->setPagAtual($pa);
            }
            elseif ($this->getAberto()){
                echo '<p>Essa página não existe no livro</p>';
            }
            else{
                echo '<p>O livro não está aberto</p>';
            }
        }
        public function voltarPag() {
            if ($this->getAberto() && $this->getPagAtual()>1) {
                $this->setPagAtual($this->getPagAtual() - 1);
            }
            elseif($this->getAberto()){
                echo '<p>Está é a primeira página do livro</p>';
            }
            else{
                echo '<p>O livro não está aberto</p>';
            }
        }
}