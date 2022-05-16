<?php
    class ContaBanco {
        private $saldo;
        private $tipo;
        private $dono;

        public function setSaldo($saldo) {
            $this->saldo = $saldo;
        }

        public function getSaldo() {
            return $this->saldo;
        }
        
        public function setTipo($tipo) {
            $this->tipo = $tipo;
        }

        public function getTipo() {
            return $this->tipo;
        }

        public function setDono($dono) {
            $this->dono = $dono;
        }

        public function getDono() {
            return $this->dono;
        }
    }
?>