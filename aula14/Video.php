<?php

require_once 'AcoesVideo.php';

class Video implements AcoesVideo {

private $titulo, $avaliacao, $views, $curtidas, $reproduzindo;

public function play() {
    $this->setReproduzindo(true);
}

public function pause() {
    $this->setReproduzindo(false);
}

public function like() {
    $this->setCurtidas($this->getCurtidas() + 1);
}

public function __construct($titulo) {
    $this->titulo = $titulo;
    $this->avaliacao = 0;
    $this->views = 0;
    $this->curtidas = 0;
    $this->reproduzindo = false;    
}

public function setTitulo($titulo) {
    $this->titulo = $titulo;
}

public function getTitulo() {
    return $this->titulo;
}

public function setAvaliacao($avaliacao) {
    $this->avaliacao = $avaliacao;
}

public function getAvaliacao() {
    return $this->avaliacao;
}

public function setViews($views) {
    $this->views = $views;
}

public function getViews() {
    return $this->views;
}

public function setCurtidas($curtidas) {
    $this->curtidas = $curtidas;
}

public function getCurtidas() {
    return $this->curtidas;
}

public function setReproduzindo($reproduzindo) {
    $this->reproduzindo = $reproduzindo;
}

public function getReproduzindo() {
    return $this->reproduzindo;
}

}

?>