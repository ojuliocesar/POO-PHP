<?php

require_once 'Pessoa.php';

class Funcionaria extends Pessoa{
    private $setor, $trabalhando;

    public function mudarTrabalho() {
        if($this->getTrabalhando()) {
            $this->setTrabalhando(false);
        } elseif($this->getTrabalhando() == false) {
            $this->setTrabalhando(true);
        }
    }

    public function getSetor() {
        return $this->setor;
    }

    public function setSetor($setor) {
        $this->setor = $setor;
    }

    public function getTrabalhando() {
        return $this->trabalhando;
    }

    public function setTrabalhando($trabalhando) {
        $this->trabalhando = $trabalhando;
    }
}

?>