<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 03 - POO</title>
</head>
<body>
    <pre>
        <?php
            require_once 'Caneta.php';

            $caneta1 = new Caneta;
            
            $caneta1->cor = "Azul";
            $caneta1->modelo = "BIC cristal";
            $caneta1->destampar();
            $caneta1->rabiscar();

            print_r($caneta1);
        ?>
    </pre>
</body>
</html>