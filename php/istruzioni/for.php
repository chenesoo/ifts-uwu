<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>For</title>
</head>

<body>
    <?php
    //contare i multipli di 2 da 1 a 10
    for ($i = 1; $i <= 10; $i++) {
        if ($i % 2 == 1) {
            echo "<p style=background-color:#ccc>";
            echo " $i non ";
        } else {
            echo "<p style=background-color:#fff>";
            echo " $i ";
        }
        echo " multiplo di 2";
        echo "</p>";
    }
    echo "i=$i<hr>";

    //contare i multipli di 3 da $inizio a $iterazioni
    $multipli = 0;
    $inizio = 5;
    $iterazioni = 10;
    for ($i = $inizio; $i <= $inizio + $iterazioni; $i++) {
        //$i % 3 == 1 -> non è multiplo
        //$i % 3 -> identico alla riga sopra (non multiplo)
        // ! ($i % 3) -> negazione di quello sopra (è multiplo)
        if (!($i % 3)) { //è multiplo
            echo "$i: trovato multiplo di 3<br>";
            $multipli++;
        }
    }
    echo "i multipli da $inizio a $iterazioni sono $multipli<hr>";

    //elencare i primi 10 numeri multipli di 3 da 1 a 100
    $inizio = 1;
    $fine = 100;
    $numeri = 11;
    $num = 0;
    //elencare i primi $numeri numeri multipli di $multiplo da $inizio a $fine
    for ($i = $inizio; $i <= $fine; $i++) {
        //if($i % 3 == 0) //è multiplo
        if (!($i % 3)) { //è multiplo
            $num++;
            echo "$num) $i <br>";
            if ($num == $numeri)
                break;
        }
    }

    ?>
</body>

</html>