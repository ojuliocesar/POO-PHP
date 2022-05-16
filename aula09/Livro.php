<?php

require_once 'Pessoa.php';
require_once 'Publicacao.php';

class Livro implements Publicacao{

private $titulo, $autor, $totalPaginas, $paginaAtual, $aberto, $leitor;

public function detalhes() {
    echo "<br><br>Livro " .$this->getTitulo(). " escrito por " .$this->getAutor(). " ";
    echo "<br>Páginas " .$this->getTotalPaginas(). ". Página atual: " .$this->getPaginaAtual(). "";
    echo "<br>Sendo lido por " .$this->getLeitor()->getNome(). "";
}

public function abrir() {
    $this->aberto = true;
}

public function fechar() {
    $this->aberto = false;
}

public function folhear($pagina) {
    if($pagina > $this->getTotalPaginas()) {
        echo "<p>ERROR! VOCÊ NÃO PODE FOLHEAR!!</p>";
    } else {
        $this->setPaginaAtual($pagina);
    }
}

public function avancarPag() {
    if($this->getPaginaAtual() < $this->getTotalPaginas()) {
        $this->setPaginaAtual($this->getPaginaAtual() + 1);
    } else {
        echo "Parabéns, você terminou seu livro!";
        $this->setPaginaAtual(0);
    }
}

public function voltarPag() {
    if($this->getPaginaAtual() > 0) {
        $this->setPaginaAtual($this->getPaginaAtual() - 1);
    } else {
        echo "ERROR, VOCÊ NÃO PODE VOLTAR";
    }
}

public function __construct($titulo, $autor, $totalPaginas, $leitor) {
    $this->titulo = $titulo;
    $this->autor = $autor;
    $this->totalPaginas = $totalPaginas;
    $this->paginaAtual = 0;
    $this->aberto = false;
    $this->leitor = $leitor;
}

public function setTitulo($titulo) {
    $this->titulo = $titulo;
}

public function getTitulo() {
    return $this->titulo;
}

public function setAutor($autor) {
    $this->autor = $autor;
}

public function getAutor() {
    return $this->autor;
}

public function setTotalPaginas($totalPaginas) {
    $this->totalPaginas = $totalPaginas;
}

public function getTotalPaginas() {
    return $this->totalPaginas;
}

public function  setPaginaAtual($paginaAtual) {
    $this->paginaAtual = $paginaAtual;
}

public function getPaginaAtual() {
    return $this->paginaAtual;
}

public function setAberto($aberto) {
    $this->aberto = $aberto;
}

public function getAberto() {
    return $this->aberto;
}

public function setLeitor($leitor) {
    $this->leitor = $leitor;
}

public function getLeitor() {
    return $this->leitor;
}

}

?>