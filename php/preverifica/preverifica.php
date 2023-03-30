<?php
function categoria_piu_utilizzata($domande)
{
//controlla e conta il contenuto dell'array $domande nella chiave 'categoria'
    $contatore = [];
    foreach ($domande as $domanda) {
        if (!array_key_exists($domanda['categoria'], $contatore)) {
            $contatore[$domanda['categoria']] = 0;
        }
        ++$contatore[$domanda['categoria']];
    }
    //controlla quale categoria è la più utilizzata
    $categoria_piu_utilizzata = '';
    $max_domande = 0;
    foreach ($contatore as $categoria => $n_domande) {
        if ($n_domande > $max_domande) {
            $categoria_piu_utilizzata = $categoria;
            $max_domande = $n_domande;
        }
    }
    //calcolo costo totale risposte
    $n_domande = count($domande);
    $costo_risposta = 0.5;
    $tot_costo = $n_domande * $costo_risposta;
    $tot_costo = number_format($tot_costo, 2, ",", ".");
    //fine function
    return $return = [$categoria_piu_utilizzata, $max_domande, $tot_costo];
}
?>
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
    $domanda1 = ['categoria' => "commerciale", 'risposta_corretta' => 0];
    $domanda2 = ['categoria' => "assistenza", 'risposta_corretta' => 1];
    $domanda3 = ['categoria' => "assistenza", 'risposta_corretta' => 0];
    $domande = [$domanda1, $domanda2, $domanda3];

    $corrette = 0;

    //elenco categorie senza ripetizione
    $categorie = [];
    foreach ($domande as $domanda) {
        if (!in_array($domanda['categoria'], $categorie)) {
            $categorie[] = $domanda['categoria'];
        }
        //se numero risposte corrette == 1
        if ($domanda['risposta_corretta'] == 1) {
            ++$corrette;
        }
    }

    //stampa le categorie senza ripetizioni
    echo "1) array con tutte le categorie senza ripetizioni: <br>vvvvvv";
    var_dump($categorie);
    echo "<hr>";

    //stampa quante sono le risposte corrette
    if ($corrette == 1) {
        echo "<br>2) è presente $corrette risposta corretta";
    } else if ($corrette == 0) {
        echo "<br>2) non ci sono risposte corrette";
    } else if ($corrette > 1) {
        echo "<br>2) sono presenti $corrette risposte corrette";
    }

    //stampa la categoria più utilizzata e quante volte è stata utilizzata
    $return = [$categoria_piu_utilizzata, $max_domande, $tot_costo] = categoria_piu_utilizzata($domande);
    if ($max_domande > 1) {
        echo "<br>3-4) la categoria più utilizzata è $categoria_piu_utilizzata ed è stata utilizzata $max_domande volte su " . count($domande);
    } else if ($max_domande == 1) {
        echo "<br>3-4) tutte le categorie sono state utilizzate $max_domande volta su " . count($domande);
    }

    //stampa il costo totale delle risposte
    echo "<br>5) il costo totale delle risposte è €$tot_costo";
    ?>
</body>

</html>