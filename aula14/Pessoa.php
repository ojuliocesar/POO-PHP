<?php

abstract class Pessoa {

protected $nome, $idade, $sexo, $experiencia;

public function ganharExp($e) {
    $this->experiencia +=$e;
}

public function __construct($nome, $idade, $sexo) {
    $this->nome = $nome;
    $this->idade = $idade;
    $this->sexo = $sexo;
    $this->experiencia = 0;
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

public function setExperiencia($experiencia) {
    $this->experiencia = $experiencia;
}

public function getExperiencia() {
    return $this->experiencia;
}

}

?>