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
    $eta = [];
    $bc1 = "#ccc";
    $bc2 = "#fff";
    $neonato = 0;
    $tot_maggiorenni= 0;
    $n_maggiorenne = 0;

    //creo un array con numeri generati randomicamente
    for ($i = 0; $i < 100; $i++) {
        $eta[$i] = rand(0, 100);
    }

    $max = $eta[0];
    for ($i = 0; $i < count($eta); $i++) {
        $bc = $bc1;

        //cambio colore riga
        if (($i + 1) % 2) { //$i + 1 dispari 
            $bc = $bc2;
        }
        echo "<div style='background-color:$bc'>";

        //scrivo in corsivo se sono minorenni e in grassetto se sono maggiorenni
        if ($eta[$i] < 18) {
            echo "<i>" . $eta[$i] . "</i><br>";
        } else { //conto quanti sono i maggiorenni e dopo sommo la loro età
            echo "<b>" . $eta[$i] . "</b><br>";
            ++$n_maggiorenne;
            $tot_maggiorenni = $tot_maggiorenni + $eta[$i];
        }

        //conto i neonati
        if ($eta[$i] == 0) {
            ++$neonato;
        }

        //trovo il più anziano
        if ($eta[$i] > $max) {
            $max = $eta[$i];
            $j = $i;
        }

        echo "</div>";
    }
    echo "<br><table border=1 style='border-collapse: collapse'"."<tr>"."<td>";
    echo "sono presenti $neonato neonati<br>";
    echo "il più anziano ha $max anni e si trova nella posizione $j<br>";
    echo "</td></tr></table>";
    echo ($n_maggiorenne>0? ("l'età media tra i maggiorenni è ". round($tot_maggiorenni / $n_maggiorenne). " anni"):("l'età media tra i maggiorenni non è disponibile")) ."<br>";
    echo "in totale servono $n_maggiorenne schede";


    ?>
</body>

</html>