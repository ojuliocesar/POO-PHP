<pre>
<?php

require_once 'Visitante.php';
require_once 'Aluno.php';
require_once 'Bolsista.php';

$v1 = new Visitante;
$a1 = new Aluno;
$b1 = new Bolsista;

$v1->setNome("Juvenal");
$v1->setIdade(33);
$v1->setSexo("M");

$a1->setNome("Pedro");
$a1->setMatricula(1111);
$a1->setIdade(17);
$a1->setSexo("M");
$a1->setCurso("Informática");
$a1->pagarMensalidade();

$b1->setMatricula(112);
$b1->setNome("Jubileu");
$b1->setBolsa(12.5);
$b1->setCurso("Administração");
$b1->pagarMensalidade();

print_r($v1);
print_r($a1);
print_r($b1);

?>
</pre>