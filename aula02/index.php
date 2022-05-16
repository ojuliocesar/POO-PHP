<?php
    require_once 'Caneta.php';

    $caneta1 = new Caneta;
    
    $caneta1->cor = "azul";
    $caneta1->modelo = "BIC";
    $caneta1->ponta = 0.5;
    $caneta1->carga = 50;
    $caneta1->tampada = true;
    
    $caneta1->destampar();
    $caneta1->tampar();

    $caneta1->rabiscar();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 02 - POO</title>
</head>
<body>
    
</body>
</html>