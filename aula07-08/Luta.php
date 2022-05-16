<?php
require_once 'Lutador.php';

class Luta {
    private $desafiado, $desafiante, $rounds, $aprovada;

    public function marcarLuta($desafiado, $desafiante) {
        if ($desafiado->getCategoria() === $desafiante->getCategoria() && ($desafiado != $desafiante)) {
            $this->setAprovada(true);
            $this->setDesafiado($desafiado);
            $this->setDesafiante($desafiante);
        } else {
            $this->setAprovada(false);
            $this->desafiante = null;
            $this->desafiado = null;
        }
    }

    public function lutar() {
        if($this->getAprovada()) {
            $this->getDesafiado()->apresentar();
            $this->getDesafiante()->apresentar();

            $vencedor = rand(0,2);

            switch($vencedor) {
                case 0: //Empate
                    echo "<p>Empate!</p>";
                    $this->getDesafiado()->empatarLuta();
                    $this->getDesafiante()->empatarLuta();
                break;

                case 1: //Desafiado vence
                    echo "<p>" .$this->getDesafiado()->getNome(). " venceu!</p>";
                    $this->getDesafiado()->ganharLuta();
                    $this->getDesafiante()->perderLuta();
                break;

                case 2: //Desafiante vence
                    echo "<p>" .$this->getDesafiante()->getNome(). " venceu!</p>";
                    $this->getDesafiante()->ganharLuta();
                    $this->getDesafiado()->perderLuta();
                break;
            }

        } else {
            echo "<p>Esta luta não pode acontecer</p>";
        }
    }

    public function getDesafiado() {
        return $this->desafiado;
    }

    public function setDesafiado($desafiado) {
        $this->desafiado = $desafiado;
    }

    public function getDesafiante() {
        return $this->desafiante;
    }

    public function setDesafiante($desafiante) {
        $this->desafiante = $desafiante;
    }

    public function getRounds($rounds) {
        $this->rounds = $rounds;
    }

    public function setRounds() {
        return $this->rounds;
    }

    public function setAprovada($aprovada) {
        $this->aprovada = $aprovada;
    }

    public function getAprovada() {
        return $this->aprovada;
    }
}

?>