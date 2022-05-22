<?php

require_once 'Pessoa.php';

class Aluno extends Pessoa {
    private $matricula, $curso;

    public function pagarMensalidade() {
        echo "<p>Pagando mensalidade do aluno <b>" .$this->nome. "</b></p>";
    }

    public function setMatricula($matricula) {
        $this->matricula = $matricula;
    }

    public function getMatricula() {
        return $this->matricula;
    }

    public function setCurso($curso) {
        $this->curso = $curso;
    }

    public function getCurso() {
        return $this->curso;
    }
}

?>