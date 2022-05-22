<?php

require_once 'Animal.php';

class Peixe extends Animal {
    private $corEscama;

    public function alimentar() {
        echo "<p>Comendo substâncias</p>";
    }

    public function emitirSom() {
        echo "<p>Pexei não faz som '-'</p>";
    }

    public function locomover() {
        echo "Nadando";
    }

    public function soltarBolha() {
        echo "<p>Soltando bolha glub glub</p>"; 
    }

    public function setCorEscama($corEscama) {
        $this->corEscama = $corEscama;
    }

    public function getCorEscama() {
        return $this->corEscama;
    }
}

?>