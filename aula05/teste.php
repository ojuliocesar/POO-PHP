<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
        
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
     <pre>
        <?php
            require_once 'testeContaBanco.php';

            $p1= new ContaBanco(); //Jubileu
            $p2= new ContaBanco(); //Creuza
            $p1->abrirConta("CC");
            $p1->setnumConta(1111);
            $p1->setDono("Jubileu");
            $p2->setDono("Creuza");
            $p2->abrirConta("CP");
            $p2->setnumConta(2222);

            $p1->depositar(100);
            $p2->depositar(100);

            $p2->sacar(50);

            print_r($p1);
            print_r($p2);
        ?>
    </pre>
</body>
</html>