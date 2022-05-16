<?php

interface Publicacao {

public function detalhes();
public function abrir();
public function fechar();
public function folhear($pagina);
public function avancarPag();
public function voltarPag();

}
?>