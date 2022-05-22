<?php

require_once 'Video.php';
require_once 'Gafanhoto.php';

class Visualizacao {
    
private $espectador, $filme;

public function avaliar() {
    if ($this->filme->getAvaliacao() < 100) {
        $this->filme->setAvaliacao($this->filme->getAvaliacao() + 10);
    } else {
        echo "<p>A avaliação desse vídeo já está maximizada</p>";
    }
}

public function avaliarNota($nota) {
    if ($nota <= 100 ) {
        $this->filme->setAvaliacao($nota);
    } else {
        echo "<p>A avaliação desse vídeo já está maximizada</p>";
        $this->filme->setAvaliacao(100);
    }
}

public function avaliarPorcentagem($porcentagem) {
    $nota = 0;

    if ($porcentagem < 20) {
        $nota = 3;
    } elseif ($porcentagem <= 50) {
        $nota = 5;
    } elseif($porcentagem <= 90) {
        $nota = 8;
    } else {
        $nota = 10;
    }

    $this->filme->setAvaliacao($nota);
}

public function __construct($espectador, $filme) {
    $this->espectador = $espectador;
    $this->filme = $filme;
    $this->filme->setViews($this->filme->getViews() + 1);
    $this->espectador->viuMaisUm();
}

public function setEspectador($espectador) {
    $this->espectador = $espectador;
}

public function getEspectador() {
    return $this->espectador;
}

public function setFilme($filme) {
    $this->filme = $filme;
}

public function getFilme() {
    return $this->filme;
}
}


?>