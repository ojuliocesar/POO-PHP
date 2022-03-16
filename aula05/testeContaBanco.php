<?php
    class Contabanco {
        //atributos
        public $numConta;
        protected $tipo;
        private $dono;
        private $saldo;
        private $status;
        
        //Métodos
        public function abrirConta($t) {
            $this->setTipo($t);
            $this->setStatus(true);

            if ($t == "CC") {
                $this->setSaldo(50);
            } elseif ($t == "CP") {
                $this->setSaldo(150);
            }
        }
        public function fecharConta() {
            if ($this->getSaldo() > 0) {
                echo "Conta com dinheiro";
            } elseif ($this->getSaldo() < 0) {
                echo "Conta em débito, impossível encerrar!";
            } else { 
                $this->getStatus(false);
            }
        }
        public function depositar($v) {
            if ($this->getStatus() ) {
                $this->setSaldo ($this->getSaldo() + $v);
            } else {
                echo "Conta fechada. Não consigo depositar";
            }
        }
        public function sacar($v) {
            if ($this->getStatus() ) {
                if ($this->getSaldo() >= $v) {
                    $this->setSaldo($this->getSaldo() - $v);
                    //concatenação
                    echo "<p>Sacado $v da conta de ". $this->getDono() ."</p>"; 
                } else {
                    echo "Impossível sacar! Saldo insuficiente.";
                }
            } else {
                echo "Impossível sacar! Sua conta não existe!";
            } 
        }
        public function pagarMensal() {
            if ($this->getTipo("CC") ) {
                $v = 12;
            } else {
                $v = 20;
            }

            if ($this->getStatus() ) {
                if ($this->getSaldo() > $v) {
                    $this->getSaldo($this->getSaldo() - $v);
                } else {
                    echo "Problemas com a conta, não posso cobrar";
                }
            }
        }

        //Métodos especiais
        public function __construct() {
            $this->setSaldo(0);
            $this->setStatus(false);
            echo "<p>Boa sorte, sua conta foi criadakkkk</p>";
        }
        public function getnumConta() {
            return $this->numConta;
        }
        public function setnumConta($numConta) {
            $this->numConta = $numConta;
        }

        public function getTipo() {
            return $this->tipo;
        }

        public function setTipo($tipo) {
            $this->tipo = $tipo;
        }

        public function getDono() {
            return $this->dono;
        }

        public function setDono($dono) {
            $this->dono = $dono;
        }

        public function getSaldo() {
            return $this->saldo;
        }

        public function setSaldo($saldo) {
            $this->saldo = $saldo;
        }

        public function getStatus() {
            return $this->status;
        }

        public function setStatus($status) {
            $this->status = $status;
        }

    }
?>