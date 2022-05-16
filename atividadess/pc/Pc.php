<?php

require_once 'Gabinete.php';
require_once 'Jogos.php';

class Pc implements Gabinete{
    private $processador, $placaMae, $memoria, $armazenamento, $placaDeVideo, $fonte, $gabinete, $ligado, $imagensBaixadas, $id, $jogo;

    public function ligar() {
        $this->ligado = true;
    }

    public function detalhes() {
        echo "<br><br>Processador: " .$this->getProcessador(). "<br>";
        echo "Placa Mãe: " .$this->getPlacaMae(). "<br>";
        echo "Memória Ram: " .$this->getMemoria(). "<br>";
        echo "Armazenamento: " .$this->getArmazenamento(). "<br>";
        echo "Placa de Vídeo: " .$this->getPlacaDeVideo(). "<br>";
        echo "Fonte: " .$this->getFonte(). "<br>";
        echo "Gabinete:  " . $this->getGabinete() . "<br>";
        echo "Imagens Baixadas: " .$this->getImagensBaixadas(). "<br>";
        echo "ID: " .$this->getId(). "<br>";
        echo "Jogando: " .$this->getJogo()->getNome(). "<br><br>";
    }

    public function desligar() {
        $this->ligado = false;
    }

    public function baixarImagem() {
        if($this->getLigado()) {
            $this->setImagensBaixadas($this->getImagensBaixadas() + 1);
        }
    }

    public function jogar($jogo) {
        echo "Jogando $jogo";
    }

    public function entrarCall() {
        if($this->getLigado()) {
            echo "<p>Você entrou em uma call, dá um salve pra gelera</p>";
        }
    }

    public function __construct($jogo) {
        $this->setProcessador("AMD Ryzen 5 3600");
        $this->setPlacaMae("A320M");
        $this->setMemoria("Memória 8GB");
        $this->setArmazenamento("SSD 240GB");
        $this->setPlacaDeVideo("GeForce GTX 1650");
        $this->setFonte("500W 80 Plus");
        $this->setGabinete("Gabinete ATX");
        $this->setLigado(false);
        $this->setImagensBaixadas(0);
        $this->setJogo($jogo);
        $this->id = rand(1000, 2000);
    }

    public function setProcessador($processador) {
        $this->processador = $processador;
    }

    public function getProcessador() {
        return $this->processador;
    }

    public function setPlacaMae($placaMae) {
        $this->placaMae = $placaMae;
    }

    public function getPlacaMae() {
        return $this->placaMae;
    }

    public function setMemoria($memoria) {
        $this->memoria = $memoria;
    }

    public function getMemoria() {
        return $this->memoria;
    }

    public function setArmazenamento($armazenamento) {
        $this->armazenamento = $armazenamento;
    }

    public function getArmazenamento() {
        return $this->armazenamento;
    }

    public function setPlacaDeVideo($placaDeVideo) {
        $this->placaDeVideo = $placaDeVideo;
    }

    public function getPlacaDeVideo() {
        return $this->placaDeVideo;
    }

    public function setFonte($fonte) {
        $this->fonte = $fonte;
    }

    public function getFonte() {
        return $this->fonte;
    }

    public function setGabinete($gabinete) {
        $this->gabinete = $gabinete;
    }

    public function getGabinete() {
        return $this->gabinete;
    }

    public function setLigado($ligado) {
        $this->ligado = $ligado;
    }

    public function getLigado() {
        return $this->ligado;
    }

    public function setImagensBaixadas($imagensBaixadas) {
        $this->imagensBaixadas = $imagensBaixadas;
    }

    public function getImagensBaixadas() {
        return $this->imagensBaixadas;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getId() {
        return $this->id;
    }

    public function setJogo($jogo) {
        $this->jogo = $jogo;
    }

    public function getJogo() {
        return $this->jogo;
    }
}

?>