<pre>
<?php

require_once 'Gafanhoto.php';
require_once 'Video.php';
require_once 'Visualizacao.php';


$video = array();
$gafanhoto = array();
$visualizacao = array();

$video[0] = new Video("Primeira abertura de JoJo");
$video[1] = new Video("Segunda abertura de JoJo");
$video[2] = new Video("Terceira abertura de JoJo");

$gafanhoto[0] = new Gafanhoto("Juba", 23, "M", "jubinha123");
$gafanhoto[1] = new Gafanhoto("Jotaro Joestar", 18, "M", "jotarofodao");
$gafanhoto[2] = new Gafanhoto("Joseph Joestar", 50, "M", "agoraeuvoucorrer123");

$visualizacao[0] = new Visualizacao($gafanhoto[0], $video[1]);
$visualizacao[1] = new Visualizacao($gafanhoto[0], $video[2]); // Juba assiste Primeira abertura de JoJo

$gafanhoto[2]->viuMaisUm();
$gafanhoto[2]->viuMaisUm();
$gafanhoto[2]->viuMaisUm();
$gafanhoto[2]->ganharExp(20);

$visualizacao[0]->avaliar();
$visualizacao[1]->avaliarPorcentagem(44);

print_r($visualizacao);


?>
</pre>