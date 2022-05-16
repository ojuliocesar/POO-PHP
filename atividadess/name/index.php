<?php
    require_once 'ContaBanco.php'; 

    $p1 = new ContaBanco;
    $p1->setSaldo(200);
    $p1->setTipo("Conta Corrente");
    $p1->setDono("Júlio");

    $dono = $p1->getDono();
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Olá, <?php echo $dono ?>!</h1>
    <p>Você possui R$ <?php echo $p1->getSaldo() ?> em sua <strong><?php echo $p1->getTipo() ?></strong></p>
</body>
</html>