<?php

require_once 'Pessoa.php';

class Aluno extends Pessoa{
    private $matricula, $curso;

    public function cancelarMatricula() {
        $this->setMatricula(false);
    }

    public function getMatricula() {
        return $this->matricula;
    }

    public function setMatricula($matricula) {
        $this->matricula = $matricula;
    }

    public function getCurso() {
        return $this->curso;
    }

    public function setCurso($curso) {
        $this->curso = $curso;
    }
}

?>