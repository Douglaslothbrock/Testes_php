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

    $nome = isset($_GET["nome"]) ? $_GET["nome"] : "[Nome Não Informado]";
    $ano = isset($_GET["ano"]) ? $_GET["ano"] : 0;
    $sexo = isset($_GET["sexo"]) ? $_GET["sexo"] : "[Não Informado]";
    $idade = date("Y") - $ano;
    echo "$nome <br>tem $idade anos de Idade<br> É do SEXO: $sexo";

?>
<form method="get" action="02-exercicio.html">
    <input type="submit" value="Voltar">
</form>

</body>
</html>