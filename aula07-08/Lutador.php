<?php

class Lutador {
    private $nome, $nacionalidade, $idade, $altura, $peso, $categoria, $vitorias, $derrotas, $empates;

    public function apresentar() {
        echo "<hr>";
        echo "<p>CHEGOU A HORA! O lutador " .$this->getNome(). "</p>";
        echo "<p>Veio diretamente de " .$this->getNacionalidade(). "</p>";
        echo "<p>Tem " .$this->getIdade(). " anos e pesa " .$this->getPeso(). " Kg</p>";
        echo "<p>ele tem " .$this->getVitorias(). " vitórias</p>";
        echo "<p>" .$this->getEmpates(). " derrotas e " .$this->getEmpates(). " empates</p>";
    }

    public function status() {
        echo "<hr>";
        echo "<p>" .$this->getNome(). "</p>";
        echo "<p>É um peso " .$this->getCategoria(). "</p>";
        echo "<p>" .$this->getVitorias(). " vitórias</p>";
        echo "<p>" .$this->getDerrotas(). " derrotas</p>";
        echo "<p>" .$this->getEmpates(). " empates</p>";
    }

    public function ganharLuta() {
        $this->setVitorias($this->getVitorias() + 1);
    }

    public function perderLuta() {
        $this->setDerrotas($this->getDerrotas() + 1);
    }

    public function empatarLuta() {
        $this->setEmpates($this->getEmpates() +1);
    }

    public function __construct($nome, $nacionalidade, $idade, $altura, $peso, $vitorias, $derrotas, $empates) {
        $this->nome = $nome;
        $this->nacionalidade = $nacionalidade;
        $this->idade = $idade;
        $this->altura = $altura;
        $this->setPeso($peso);
        $this->vitorias = $vitorias;
        $this->derrotas = $derrotas;
        $this->empates = $empates;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getNacionalidade() {
        return $this->nacionalidade;
    }

    public function setNacionalidade($nacionalidade) {
        $this->nacionalidade = $nacionalidade;
    }

    public function getIdade() {
        return $this->idade;
    }

    public function setIdade($idade) {
        $this->idade = $idade;
    }

    public function getAltura() {
        return $this->altura;
    }

    public function setAltura($altura) {
        $this->altura = $altura;
    }

    public function getPeso() {
        return $this->peso;
    }

    public function setPeso($peso) {
        $this->peso = $peso;
        $this->setCategoria();
    }

    public function getCategoria() {
        return $this->categoria;
    }

    public function setCategoria() {
        if ($this->peso < 52.2) {
            $this->categoria = "Inválido";
        } elseif($this->peso <= 70.3) {
            $this->categoria = "Leve";
        } elseif($this->peso<= 83.9) {
            $this->categoria = "Médio";
        } elseif($this->peso <= 120.2) {
            $this->categoria = "Pesado";
        } else {
            $this->categoria = "Inválido";
        }
    }

    public function getVitorias() {
        return $this->vitorias;
    }

    public function setVitorias($vitorias) {
        $this->vitorias = $vitorias;
    }

    public function getDerrotas() {
        return $this->derrotas;
    }

    public function setDerrotas($derrotas) {
        $this->derrotas = $derrotas;
    }

    public function getEmpates() {
        return $this->empates;
    }

    public function setEmpates($empate) {
        $this->empates = $empate;
    }
}

?>