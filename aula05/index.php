<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <pre>
        <?php
        
        require_once 'ContaBanco.php';

        $conta1 = new ContaBanco;
        $conta2 = new ContaBanco;
        

        $conta1->setDono("Creusa");
        $conta1->setNumeroConta(1);

        $conta1->abrirConta("CC");
        $conta1->depositar(300);
        $conta1->sacar(100);
        $conta1->pagarMensalidade();


        $conta2->getDono("Jubileu");
        $conta2->setNumeroConta(2);

        $conta2->abrirConta("CP");
        $conta2->depositar(500);
        $conta2->pagarMensalidade();

        print_r($conta1);
        print_r($conta2);
        ?>
    </pre>
</body>
</html>