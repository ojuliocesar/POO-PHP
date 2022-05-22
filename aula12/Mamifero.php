<?php

require_once 'Animal.php';

class Mamifero extends Animal {

private $corPelo;

public function alimentar() {
    echo "<p>Mamando</p>";
}

public function emitirSom() {
    echo "<p>Som de Mamífero</p>";
}

public function locomover() {
    echo "Correndo";
}

public function setCorPelo($corPelo) {
    $this->corPelo = $corPelo;
}

public function getCorPelo() {
    return $this->corPelo;
}

}

?>