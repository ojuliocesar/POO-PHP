<pre>
<?php

    require_once 'Pc.php';
    require_once 'Jogos.php';

    $pc = array();
    $jogo = array();

    $jogo[0] = new Jogos("CupHead", "Plataforma", 150);

    $pc[0] = new Pc($jogo[0]);

    $jogo[0]->passarFase();
    $jogo[0]->detalhes();

    $pc[0]->ligar();
    $pc[0]->baixarImagem();
    $pc[0]->jogar("Undertale");
    $pc[0]->entrarCall();
    $pc[0]->detalhes();
?>
</pre>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Computador Gamer</title>
</head>
<body>
    
</body>
</html>