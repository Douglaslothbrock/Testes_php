<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php

    $valor = $_GET["v"];
    $rq = sqrt($valor);
    echo " O valor enviado foi $valor";
    echo "<br> Sua Raiz é ". number_format($rq,2);
    
?>
<br><a href="01-exercicio.html">Voltar</a>
</body>
</html>