<?php

require_once 'Pessoa.php';

class Gafanhoto extends Pessoa {
    private $login, $totalAssistido;

    public function viuMaisUm() {
        $this->setTotalAssistido($this->getTotalAssistido() + 1);
    }

    public function __construct($nome, $idade, $sexo, $login) {
        parent::__construct($nome, $idade, $sexo);
        $this->login = $login;
        $this->totalAssistido = 0;
    }

    public function setLogin($login) {
        $this->login = $login;
    }

    public function getLogin() {
        return $this->login;
    }

    public function setTotalAssistido($totalAssistido) {
        $this->totalAssistido = $totalAssistido;
    }

    public function getTotalAssistido() {
        return $this->totalAssistido;
    }
}

?>