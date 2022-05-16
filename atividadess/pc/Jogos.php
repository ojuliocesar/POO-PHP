<?php

require_once 'Pc.php'; 

class Jogos {
    private $nome, $time, $estilo, $preco, $fase, $jogador;

    public function passarFase() {
        if($this->getTime() < 100) {
            $this->setFase($this->getFase() + 1);
            $this->setTime($this->getTime() + 10);
        } elseif($this->getTime() == 100) {
            echo "Parabéns, você zerou " .$this->getNome(). "";
            $this->setTime(0);
            $this->setFase(0);
        }
    }

    public function voltarFase() {
        if($this->getFase() > 0 && $this->getTime() > 0) {
            $this->setFase($this->getFase() - 1);
            $this->setTime($this->getTime() - 10);
        }
    }

    public function detalhes() {
        echo "<br><br>Nome: " .$this->getNome(). "<br>";
        echo "" .$this->getTime(). "% completo<br>";
        echo "Esse jogo é estilo " .$this->getEstilo(). "<br>";
        echo "Valor: " .$this->getPreco(). "<br>";
        echo "A sua fase atual é " .$this->getFase(). "<br><br>";
        // echo "Jogador: " .$this->getJogador()->getId(). "<br>";
    }

    public function __construct($nome, $estilo, $preco, 
    // $jogador
    ) {
        $this->nome = $nome;
        $this->estilo = $estilo;
        $this->preco = $preco;
        $this->time = 0;
        $this->fase = 0;
        // $this->setJogador($jogador);
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setTime($time) {
        $this->time = $time;
    }

    public function getTime() {
        return $this->time;
    }

    public function setEstilo($estilo) {
        $this->estilo = $estilo;
    }

    public function getEstilo() {
        return $this->estilo;
    }

    public function setPreco($preco) {
        $this->preco = $preco;
    }

    public function getPreco() {
        return $this->preco;
    }

    public function setFase($fase) {
        $this->fase = $fase;
    }

    public function getFase() {
        return $this->fase;
    }

    public function setJogador($jogador) {
        $this->jogador = $jogador;
    }

    public function getJogador() {
        return $this->jogador;
    }
}

?>