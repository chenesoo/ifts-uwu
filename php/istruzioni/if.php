<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>If</title>
</head>

<body>
    <?php
    //assegnare a $m il max tra x e y
    $x = 1;
    $y = 1;
    if ($x >= $y) {
        if ($x == $y) {
            echo "i numeri sono uguali <br>";
        }
        echo "condizione vera <br>";
        $m = $x;

    } else {
        echo "condizione falsa <br>";
        $m = $y;
    }
    echo "il max tra $x e $y è $m";
    ?>
</body>

</html>