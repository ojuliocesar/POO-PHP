<?php
    require_once 'Controlador.php';

    class ControleRemoto implements Controlador{
        private $volume;
        private $ligado;
        private $tocando;

        public function __construct() {
            $this->volume = 50;
            $this->ligado = false;
            $this->tocando = false;
        }

        public function ligar() {
            $this->setLigado(true);
        }

        public function desligar() {
            $this->setLigado(false);
        }

        public function abrirMenu() {
            echo "<br>Está ligado? " . ($this->getLigado() ?"SIM":"NAO");
            echo "<br>Está tocando? " . ($this->getTocando() ?"SIM":"NAO");
            echo "<br>Volume " . $this->getVolume();
            for($i=10; $i <=$this->getVolume(); $i+=10) {
                echo" | ";
            }
            
        }

        public function fecharMenu() {
            echo "<br>Fechando menu...";
        }

        public function maisVolume() {
            if ($this->getLigado() ) {
                $this->setVolume($this->getVolume()+10);
            } else {
                echo "ERRO";
            }
        }

        public function menosVolume() {
            if ($this->getLigado()) {
                $this->setVolume($this->getVolume()-10);
            } else {
                echo "ERRO";
            }
        }

        public function ligarMudo() {
            if ($this->getLigado() && $this->getVolume()> 0 ) {
                $this->setVolume(0);
            }
        }

        public function desligarMudo() {
            if ($this->getLigado() && $this->getVolume() == 0) {
                $this->setVolume(50);
            }
        }

        public function play() {
            if ($this->getLigado() && !($this->getTocando()) ) {
                $this->setTocando(true);
            }
        }

        public function pause() {
            if ($this->getLigado() && $this->getTocando()) {
                $this->getTocando(false);
            }
        }

        public function setVolume($volume) {
            $this->volume = $volume;
        }

        public function getVolume() {
            return $this->volume;
        }

        public function setLigado($ligado) {
            $this->ligado = $ligado;
        }

        public function getLigado() {
            return $this->ligado;
        }

        public function setTocando($tocando) {
            $this->tocando = $tocando;
        }
        
        public function getTocando() {
            return $this->tocando;
        }
    }
?>