<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    //il cliente del centro scommesse sceglie un numero $numero e scommette che è uguale alla media di $estrazioni numeri casuali da 1 a 10 verificare se il cliente ha vinto
    $numero = 7;
    $estrazioni = 5;
    $somma = 0;
    for ($i = 0; $i < $estrazioni; $i++) {

        $r = rand(1, 10) . " ";
        echo $r . " <br>";
        $somma = $somma + $r;
    }
    $media = $somma / $estrazioni;
    $media_intera = ($somma - ($somma % $estrazioni)) / $estrazioni;
    echo "media: " . $media_intera . "<br>";
    if ($numero == $media_intera) {
        echo "il cliente ha vinto";
    } else {
        echo "il cliente non ha vinto";
    }
    ?>
</body>

</html>