<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <pre>
        <?php
        
        require_once 'Caneta.php';

        $caneta1 = new Caneta("BIC", "Azul", 0.5);
        $caneta2 = new Caneta("BIC", "Vermelho", 1.0);

        print_r($caneta1);
        print_r($caneta2);

        ?>
    </pre>
</body>
</html>