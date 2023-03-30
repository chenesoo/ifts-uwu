<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verifica</title>
</head>

<body>
    <?php
    //creo un array con il num di studenti
    $voto = [];
    $num_studenti = rand(20, 50);
    echo "Gli studenti sono $num_studenti";
    $bc1 = "#fff";
    $bc2 = "lightgreen";
    $num_lode = 0;
    $num_studenti = $num_studenti - 2;
    $num_promossi = 0;
    $somma = 0;
    $posti = 5;
    $studente_potenz_ammesso = 0;
    $num_min = 0;
    echo "<ol>";
    for ($i = 0; $i < $num_studenti; $i++) {
        $voto[$i] = rand(1, 101);
    }
    $min = $voto[0];
    for ($i = 0; $i < count($voto); $i++) {
        $bc = $bc1;
        if ($i % 2) {
            $bc = $bc2;
        }
        echo "<div style='background-color:$bc'>";
        if ($voto[$i] >= 60) {
            echo "<li><b>" . $voto[$i] . "</b></li>";
            ++$num_promossi;
            $somma = $somma + $voto[$i];
        } else if ($voto[$i] < 60) {
            echo "<li><i>" . $voto[$i] . "</i></li>";
        }
        if ($voto[$i] == 101) {
            ++$num_lode;
        }
        if ($voto[$i] < $min) {
            $min = $voto[$i];
            ++$num_min;
        }
        if ($voto[$i] >= 80) {
            ++$studente_potenz_ammesso;
            $percent_potenz_ammessi = ($posti / 100) * $studente_potenz_ammesso;
        }
    }
    echo "</ol></div><hr>";
    echo "<table border=1 style='border-collapse: collapse'" . "<tr>" . "<td>";
    echo "Num lode: $num_lode<br>";
    echo "Numero minimo cambiato $num_min volte<br>";
    echo "</td></tr></table>";
    echo "La media tra i promossi è " . round($somma / $num_promossi) . "/100<br>";
    if ($studente_potenz_ammesso > $posti) {
        echo "I posti sono $posti, gli studenti potenzialmente ammessi sono $studente_potenz_ammesso e il restante " . ($percent_potenz_ammessi * 100) . "% rimane in sala d'attesa";
    } else if ($posti - $studente_potenz_ammesso != 1 && $posti - $studente_potenz_ammesso != 0) {
        echo "I posti sono $posti, gli studenti potenzialmente ammessi sono $studente_potenz_ammesso e rimangono " . ($posti - $studente_potenz_ammesso) . " posti";
    } else if ($posti - $studente_potenz_ammesso == 0) {
        echo "I posti sono $posti, gli studenti potenzialmente ammessi sono $studente_potenz_ammesso e non rimangono posti, ne studenti rimasti in sala d'attesa";
    } else if ($posti - $studente_potenz_ammesso == 1) {
        echo "I posti sono $posti, gli studenti potenzialmente ammessi sono $studente_potenz_ammesso e rimane " . ($posti - $studente_potenz_ammesso) . " posto";
    }

    ?>
</body>

</html>