<pre>

<?php

require_once 'Pessoa.php';
require_once 'Aluno.php';
require_once 'Funcionaria.php';
require_once 'Professor.php';

$p1 = new Pessoa();
$p2 = new Aluno();
$p3 = new Professor();
$p4 = new Funcionaria();

$p1->setNome("Pedro");
$p2->setNome("Maria");
$p3->setNome("Cláudio");
$p4->setNome("Fabiana");

$p1->setSexo("M");
$p4->setSexo("F");

$p2->setCurso("TI");
$p3->setSalario(2500.75);
$p4->setSetor("Estoque");

$p3->receberAumento(2000);
$p4->mudarTrabalho();

print_r($p1);
print_r($p2);
print_r($p3);
print_r($p4);


?>

</pre>