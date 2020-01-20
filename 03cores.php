<!doctype html>
<html lang="pt-br">
<head>
    <?php

    $txt = isset($_GET['t']) ? $_GET['t'] : "Texto Generico";
    $tam = isset($_GET['tam']) ? $_GET['tam'] : "12pt";
    $cor = isset($_GET['cor']) ? $_GET['cor'] : "#000000";
    ?>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        span.texto{
            font-size: <?php echo $tam; ?>;
            color: <?php echo $cor; ?>;
        }
    </style>
</head>
<body>

<?php
echo  "<span class='texto'>$txt</span>";
?>

</body>
</html>