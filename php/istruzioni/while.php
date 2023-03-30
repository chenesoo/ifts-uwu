<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>While</title>
</head>

<body>
    <?php
    //PER CASA somma dei soli n pari
    // for($i=1; $i<=10; $i++){
    //         echo $i;
    // }


    // $i = 1;
    // while ($i <= 10) {
    //     echo "$i";
    //     $i++;
    // }

    //scrivere i primi interi positivi a partire da $start che sommati raggiungono il target $target (il primo che supera il target e poi l'ultimo che non lo supera)
    $target = 100;
    $start = 1;
    $i = $start - 1;
    $somma = 0;
    echo "inizio da " . ($i + 1);
    while ($somma < $target) {
        ++$i;
        $somma += $i; //$somma = $somma + $i
    }
    --$i;
    $somma -= $i;
    echo " fino a " . $i;
    echo "<br>somma = $somma";
    ?>
</body>

</html>