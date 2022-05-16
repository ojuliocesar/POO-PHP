<?php

class Caneta {

private $modelo, $cor, $ponta, $tampada;

public function __construct($modelo, $cor, $ponta) {
    $this->modelo = $modelo;
    $this->cor = $cor;
    $this->ponta = $ponta;
    $this->tampar();
}

public function getModelo() {
    return $this->modelo;
}

public function setModelo($modelo) {
    $this->modelo = $modelo;
}

public function getCor() {
    return $this->cor;
}

public function setCor($cor) {
    $this->cor = $cor;
}

public function getPonta() {
    return $this->ponta;
}

public function setPonta($ponta) {
    $this->ponta = $ponta;
}

public function tampar() {
    $this->tampada = true;
}

}

?>