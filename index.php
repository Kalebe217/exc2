<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>leitor de horario</title>
</head>
<body>

    <?php

    $d = new DateTime("now", new DateTimeZone("America/Sao_Paulo"));
    $h = $d->format('H');


    if ($h >= 0 && $h <= 12) {
        echo "<h1> bom dia! </h1>";
        echo "<img src='img/img1.jfif' alt='imagem de dia!'>";
    } elseif ($h > 12 && $h < 18) {
        echo "<h1> boa tarde! </h1>";
        echo "<img src='img/img2.jfif' alt='imagem de dia!'>";
    } else {
        echo "<h1> bom noite! </h1>";
        echo "<img src='img/img3.jfif' alt='imagem de dia!'>";
    }
    ?>

</body>
</html>