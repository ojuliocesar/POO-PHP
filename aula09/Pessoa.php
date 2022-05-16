<?php

class Pessoa {

private $nome, $idade, $sexo;

public function fazerNiver() {
    $this->setIdade($this->getIdade() + 1);
}

public function __construct($nome, $idade, $sexo) {
    $this->nome = $nome;
    $this->idade = $idade;
    $this->sexo = $sexo;
}

public function setNome($nome) {
    $this->nome = $nome;
}

public function getNome() {
    return $this->nome;
}

public function setIdade($idade) {
    $this->idade = $idade;
}

public function getIdade() {
    return $this->idade;
}

public function setSexo($sexo) {
    $this->sexo = $sexo;
}

public function getSexo() {
    return $this->sexo;
}

}    

?>