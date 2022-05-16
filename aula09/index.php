<pre> 
<?php

require_once 'Pessoa.php';
require_once 'Livro.php';

$pessoa = array();
$livro = array();

$pessoa[0] = new Pessoa("Jotaro Joestar", 20, "M");
$pessoa[1] = new Pessoa("Joseph Joestar", 50, "M");

$livro[0] = new Livro("Death Note another note", "Takeshi Obata", 176, $pessoa[0]);
$livro[1] = new Livro("Diário de um Banana", "Jeff Kinney", 200, $pessoa[1]);

$livro[0]->detalhes();
$livro[1]->detalhes();
print_r($livro)

?>
</pre>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>