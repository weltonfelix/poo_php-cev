<?php
    require_once 'ControleRemoto.php';
    class Controle implements ControleRemoto{
        //Atributos
        private $ligado;//Ligado ou Desligado
        private $volume;//Volume
        private $menu;//Menu aberto ou fechado
        private $ch;//Canal
        private $netflix;//Netflix aberta ou fechada
        private $mutado;//Mutado ou desmutado
        private $vol;//Auxilia no método mute
        private $volBar;//Auxilia nas barras de volume

        //Métodos Especiais
        public function __construct() {//Método Construtor
           $this->setLigado(false);//Quando a tv é criada ela está desligada
           $this->setVolume(50);//O volume é 50
           $this->setMenu(false);//O menu está fechado
           $this->setCh(13);//O canal é o 13
           $this->setNetflix(false);//A Netflix está fechada
        }
        //Getters e Setters
        private function getLigado() {
            return $this->ligado;
        }
        private function getVolume() {
            return $this->volume;
        }
        private function getMenu() {
            return $this->menu;
        }
        private function getCh() {
            return $this->ch;
        }
        private function getNetflix() {
            return $this->netflix;
        }
        private function getVol(){
            return $this->vol;
        }
        private function getMutado(){
            return $this->mutado;
        }
        private function getVolBar() {
            return $this->volBar;
        }
        private function setLigado($ligado) {
            $this->ligado = $ligado;
        }
        private function setVolume($volume) {
            $this->volume = $volume;
        }
        private function setMenu($menu) {
            $this->menu = $menu;
        }
        private function setCh($ch) {
            $this->ch = $ch;
        }
        private function setNetflix($netflix) {
            $this->netflix = $netflix;
        }
        private function setVol($vol){
            $this->vol = $vol;
        }
        private function setMutado($mutado){
            $this->mutado = $mutado;
        }
        private function setVolBar($volBar) {
            $this->volBar = $volBar;
        }

        
        //Métodos Abstratos
        public function onOff() {//Botão Ligar/Desligar
            if (!($this-> getLigado())) {    //Se não estiver ligada
                $this->setLigado(true); //A TV é ligada
                echo '<p>LG</p>'; //Aparece o nome da marca
            }
            elseif ($this->getLigado()) { //Se não, se a tv estiver ligada
                $this->setLigado(false); //A TV desliga
                $this->setMenu(false);//O menu fecha
                $this->setNetflix(false);//A Netflix fecha
            }
        }
        public function mute() {//Botão Mutar
            if (!($this->getMutado()) && $this->getLigado()){ //Se não estiver mutado, e a tv estiver ligada
                $this->setVol($this->getVolume());//O volume atual é passada pro atributo Vol, que auxilia
                $this->setVolume(0);//O volume fica 0
                $this->setMutado(true);//A TV fica mutada
                echo '<p>MUTE</p>';//Aparece "MUTE" na tela
            }
            elseif ($this->getMutado() && $this->getLigado()){ //Se não, se a TV estiver mutada e ligada
                $this->setVolume($this->getVol());//O volume retorna ao anterior (Armazenado em Vol)
                $this->setMutado(false);//A TV é desmutada
            }
        }
        public function volMais() { //Botão VOlume +
            if($this->getMutado() && $this->getLigado()){//Se estiver mutado e a TV ligada
                $this->mute();//AO método mute é chamado (A TV é desmutada)
                echo 'Volume: '. $this->getVolume(). '<br>';//O volume aparece na tela
                $this->volBar();//As barras de volume aparecem (Método volBar())
            }
            elseif (!($this->getMutado()) && $this->getVolume()>=0 && $this->getVolume()<100 && $this->getLigado()){//Se a TV não estiver mutada, o volume estiver dentro do limite, e a TV estiver ligada
                $this->setVolume($this->getVolume()+5); //O volume aumenta em 5
                echo 'Volume: '. $this->getVolume(). '<br>';//O volume atual aparece na tela
                $this->volBar();//As barras de volume aparecem
            }
            elseif ($this->getLigado()) {//Se a tv estiver ligada, mas o volume estiver no limite
                echo 'Volume: '. $this->getVolume(). '<br>';//O volume aparece na tela
                $this->volBar();//As barras de volume aparecem
            }
        }
        public function volMenos() {//Botão vol -
            if (!($this->getMutado()) && $this->getVolume()>0 && $this->getVolume()<=100 && $this->getLigado()){//Se a tb não estiver mutada, os volumes estiverem detro do limite e a tv estiver ligada
                $this->setVolume($this->getVolume()-5);//O volume diminiu em 5
                echo 'Volume: '. $this->getVolume(). '<br>';//O volume aparece na tela
                $this->volBar();//AS barras de volume aparecem na tela
            }
            elseif (!($this->getMutado()) && $this->getLigado()) {//Se não estiver mutado, a tv estiver ligada, mas o volume for igual a 0
                echo 'Volume: '. $this->getVolume(). '<br>';//O volume atual aparece na tela
                $this->volBar();//As barras de volume aparecem
            }
        }
        public function menu() { //Botão Abrir/Fechar menu
            if (!($this->getMenu()) && $this->getLigado()){//Se o menu estiver fechado e a TV estiver ligada
                $this->setMenu(true);//O menu é aberto
                echo '<p>----- MENU -----</p>';//Título do menu
                echo '<p>Mutado: '. (($this->getMutado())? 'SIM':'NÃO'. '</p>');//Mostra se a TV está mutada
                if (!($this->getMutado())){//Se não estiver mutada
                    echo '<p>Volume: '. $this->getVolume(). '</p>';//O volume atual aparece
                    $this->volBar();//As barras de volume aparecem
                }
            }
            elseif ($this->getMenu() && $this->getLigado()){//Se o menu estiver aberto, e a TV ligada
                $this->setMenu(false);//O menu é fechado
            }
        }
        public function chMais() {//Botão canal +
            if ($this->getCh() >= 1 && $this->getCh()<20 && $this->getLigado() && !($this->getNetflix())){//Se os canais estiverem dentro do limite, a TV estiver ligada e a Netflix não estiver aberta
                $this->setCh($this->getCh()+1);//Próximo canal
                echo '<p>'. $this->getCh(). '</p>';//O canal atual é exibido na tela
            }
            elseif ($this->getLigado() && !($this->getNetflix())) {//Se a tv estiver ligada e a Netflix fechada, mas o canal for 20 (máx)
                echo '<p>'. $this->getCh(). '</p>';//O canal atual é exibio na tela
            }
        }
        public function chMenos() {//Botão Canal -
            if ($this->getCh() > 1 && $this->getCh()<=20 && $this->getLigado() && !($this->getNetflix())){ //Se o canal estiver dentro dos limites, a Netflix estiver fechada e a TV estiver ligada
                $this->setCh($this->getCh()-1);//Canal anterior
                echo '<p>'. $this->getCh(). '</p>';//O canal atual é exibido
            }
            elseif ($this->getLigado() && !($this->getNetflix())) {//Se a TV estiver ligada e a Netflix fechada, mas o canal for 1 (mín)
                echo '<p>'. $this->getCh(). '</p>';//O canal atual é  exibido
            }
        }
        public function netflix() {//Botão Abrir Netflix (Para fechar, use o botão voltar)(O menu deve estar fechado)
            if (!($this->getNetflix()) && !($this->getMenu()) && $this->getLigado()){//Se a Netflix estiver fechada, o menu não estiver aberto e a TV estiver ligada
                $this->setNetflix(true);//A Netflix é aberta
                echo '<p>NETFLIX</p>';//Aparece "NETFLIX" na tela
            }           
        }
        public function voltar() { //Botão voltar
            if ($this->getMenu() && $this->getLigado()){ //Se o menu estiver aberto e a TV Ligada
                $this->menu();//O menu é fechado
            }
            if ($this->getNetflix() && $this->getLigado()) {//Se a netflix estiver aberta e a TV ligada
                $this->setNetflix(false);//A Netflix fecha
            }
        }
        
        //Acessórios
        private function volBar(){//Método da barra de volume
            for ($i=0;$i<$this->getVolume(); $i+=5){//Enquanto o contador for menor do que o volume atual, o contador recebe +5
                echo ' | ';//Uma barra é mostrada
            }
            echo '<br>';//Quebra de linha
        }
    }
