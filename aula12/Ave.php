<?php

require_once 'Animal.php';

class Ave extends Animal {

    private $corPena;

    public function alimentar() {
        echo "<p>Comendo frutas</p>";
    }

    public function emitirSom() {
        echo "<p>Som de ave</p>";
    }

    public function locomover() {
        echo "Voando";
    }

    public function setCorPena($corPena) {
        $this->corPena = $corPena;
    }

    public function getCorPena() {
        return $this->corPena;
    }
}

?>