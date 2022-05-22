<pre>
<?php

require_once 'Animal.php';
require_once 'Mamifero.php';
require_once 'Reptil.php';
require_once 'Peixe.php';
require_once 'Ave.php';
require_once 'Canguru.php';
require_once 'Cachorro.php';
require_once 'Cobra.php';
require_once 'Tartaruga.php';
require_once 'Goldfish.php';
require_once 'Arara.php';

$m = new Mamifero;
$r = new Reptil;
$a = new Ave;
$c = new Canguru;
$k = new Cachorro;
$t = new Tartaruga;

$m->locomover();
$c->locomover();
$k->locomover();
$t->locomover();
$k->emitirSom();
$m->emitirSom();

print_r($m);
print_r($r);
print_r($a);
print_r($c);
print_r($t);
print_r($k);
print_r($a);

?>
</pre>