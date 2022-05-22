<?php

require_once 'Animal.php';
require_once 'Mamifero.php';
require_once 'Lobo.php';
require_once 'Cachorro.php';

$cachorro = new Cachorro;

$cachorro->reagirFrase("Feio");
$cachorro->reagirHora(13, 20);
$cachorro->reagirDono(true);
$cachorro->reagirIdade(3, 8);

?>