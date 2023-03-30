<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
</head>

<body>
    <?php
    $a = [];
    $totale = 0;
    //inizializzo l'array
    for ($i = 0; $i < 10; $i++) {
        $a[$i] = rand(0, 100);
    }

    //stampo il contenuto dell'array
    for ($i = 0; $i < 10; $i++) {
        echo ($i + 1) . ") " . $a[$i] . "<br>";
    }

    //media degli elementi dell'array $a
    for ($i = 0; $i < 10; $i++) {
        $totale = $totale + $a[$i];
    }
    $media = $totale / $i;
    echo '<br>$media= ' . $media;
    ?>
</body>

</html>