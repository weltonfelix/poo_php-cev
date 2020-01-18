<?php
class ContaBanco {
    //Atributos
    public $numConta; //Número da conta (público)
    protected $tipo;//Tipo da conta (protegido)
    private $dono;//Dono da conta (privado)    
    private $saldo;//Saldo (privado)    
    private $status;//Status (privado)    

    //Métodos
    public function abrirConta($t){ //Função Abrir conta
        $this->setStatus(true); //Status fica verdadeiro
        $this->setTipo($t); //O tipo é definido como o parâmetro passado
        if ($t=='cc'){ //Se for cc
            $this->setSaldo(50); //Saldo recebe 50
        }
        elseif ($t == 'cp'){ //Se for cp
            $this->setSaldo(150); //Saldo recebe 150
        }
    }    
    public function fecharConta(){//Função Fechar conta
        if ($this->getSaldo()==0) { //Se o saldo for R$0
            $this->setStatus(false);//Status se torna falso
            echo "Conta de ". $this->getDono(). " fechada com sucesso.</p>";
        }
        else{
            echo "Ops! O seu saldo é R$ ". $this->getSaldo(). ". Para fechar a conta, seu saldo precisa ser igual a R$ 0. </p>";//Mensagem de erro, pois o saldo é diferente de R$0
        }
    }    
    public function depositar($v){//Função Depositar
        if ($this->getStatus()){//Se a conta está aberta
            $this->setSaldo($this->getSaldo() + $v);//O valor é adicionado ao saldo
            echo "Deposito de R$ $v na conta do(a) ". $this->getDono(). "</p>";
        }
        else{
            echo 'Para depositar, você precisa abrir uma conta.';//ERRO: A conta não está aberta
        }
    }    
    public function sacar($v){//Função Sacar
     if ($this->getStatus() && $v <= $this->getSaldo()) { //Se a conta estiver ativa e tiver o valor
         $this->setSaldo($this->getSaldo() - $v);//O valor é removido do saldo
         echo "Saque de R$ $v autorizado na conta do(a) ". $this->getDono(). "</p>";
     }
     else{
         echo "Este valor não está disponível para saque, ou você não tem uma conta ativa. Seu saldo é R$ {$this->saldo}</p>";//Mensagem de ERRO: As condições não estão satisfeitas
     }
    }    
    public function pagarMensal(){//Função Pagar taxa Mensal
        if ($this->getTipo() == 'cc'){//Se for conta corrente
            $v = 12;//O valor a ser pago é R$12
        }
        elseif ($this->getTipo() == 'cp') {//Se for conta poupança
            $v = 20;//O valor a ser pago é R$20
        }
        if ($this->getStatus()){ //Se a conta estiver aberta
            if ($this->getSaldo()>= $v){//E se o valor estiver siponível na conta
                $this->setSaldo($this->getSaldo() - $v);//O valor é debitado
                echo "Mensalidade de R$ $v debitada da conta do(a) ". $this->getDono(). "</p>";
            }
            else{
                echo 'Este valor não está disponível na sua conta.';//ERRO: Valor não disponível
            }
        }
        else{
            echo 'Você não tem nenhuma conta Aberta';//ERRO: Não existem contas abertas
        }
    }    
    
    //Métodos: Constructor
    function __construct() {
        $this->setStatus(false);//A conta não está aberta
        $this->setSaldo(0);//O saldo é de R$0
        echo '<p>Contra criada com sucesso!</p>';
    }
        
    //Métodos: Getters e Setters
    function getNumConta() {
        return $this->numConta;
    }
    function getTipo() {
        return $this->tipo;
    }
    function getDono() {
        return $this->dono;
    }
    function getSaldo() {
        return $this->saldo;
    }
    function getStatus() {
        return $this->status;
    }
    
    function setNumConta($numConta) {
        $this->numConta = $numConta;
    }
    function setTipo($tipo) {
        $this->tipo = $tipo;
    }
    function setDono($dono) {
        $this->dono = $dono;
    }
    function setSaldo($saldo) {
        $this->saldo = $saldo;
    }
    function setStatus($status) {
        $this->status = $status;
    }
}