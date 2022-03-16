<?php
    class Lutador {
        private $nome;
        private $nacionalidade;
        private $idade;
        private $altura;
        private $peso;
        private $categoria;
        private $vitorias;
        private $derrotas;
        private $empates;

        public function __construct($nome, $nacionalidade, $idade, $altura, $peso, $vitorias, $derrotas, $empates) {
            $this->nome = $nome;
            $this->nacionalidade = $nacionalidade;
            $this->idade = $idade;
            $this->altura = $altura;
            $this->peso = $peso;
            $this->vitorias = $vitorias;
            $this->derrotas = $derrotas;
            $this->empates = $empates;
        }

        public function apresentar() {
            echo "Lutador: " . $this->getNome() . " ";
            echo "Origem: " . $this->getNacionalidade() . " ";
            echo " " . $this->getIdade() . " anos";
            echo " " . $this->getAltura() . " m de altura ";
            echo "Pesando: " . $this->getPeso() . " kg "; 
            echo "Ganhou " . $this->getVitorias() . " ";
            echo "Perdeu " . $this->getDerrotas() . " ";
            echo "Empatou " . $this->getEmpates() . " ";
        }

        public function status() {
            echo " " . $this->getNome() . " ";
            echo "É um peso " . $this->getCategoria() . " ";
            echo " " . $this->getVitorias() . " vitórias";
            echo " " . $this->getDerrotas() . "derrotas";
            echo " " . $this->getEmpates() . "empates";
        }

        public function ganharLuta() {
            $this->setVitorias($this->getVitorias() + 1);
        }

        public function perderLuta() {
            $this->setDerrotas($this->getDerrotas() + 1); 
        }

        public function empatarLuta() {
            $this->setEmpates($this->getEmpates() + 1);
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

        public function getIdade () {
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
        }

        public function getCategoria() {
            return $this->categoria;

            if ($this->getPeso < 52.2) {
                $this->setCategoria("Inválido, o cara é seco de maiskkkk");
            } elseif ($this->getPeso <= 70.3) {
                $this->setCategoria("Leve");
            } elseif ($this->getPeso <= 83.9) {
                $this->setCategoria("Médio");
            } elseif ($this->getPeso <= 120.2) {
                $this->setCategoria("PESADOkk");
            } else {
                $this->setCategoria("Inválido");
            }
        }

        public function setCategoria($categoria) {
            $this->categoria = $categoria;
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

        public function setEmpates($empates) {
            $this->empates = $empates;
        }
    }
?>