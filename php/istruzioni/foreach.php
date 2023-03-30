<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foreach</title>
</head>

<body>
    <?php
    $a = ['mario' => 1, 'giacomo' => 1, 'maria' => 1, 'simone' => 5, 'giuseppe' => 8, 'materia' => 'HTML', 'prof' => ""]; //inizializzazione
    $a['tutor'] = "Adriano Amadei";
    $a['coordinatore'] = "Sara Forlivesi";
    foreach ($a as $chiave => $valore) {
        echo "<br>[$chiave] => $valore";
    }
    echo "<hr>";
    //memorizzare in $risultato le chiavi dell'array $a relative alle posizioni in cui è memorizzato $val, cioè: chi ha preso 10?
    //$v --> valore dell'elemento considerato
    //$k --> chiave dell'elemento considerato
    //$v e $a[$k] sono la stessa cosa
    $val = 10;
    $risultato = []; //inizializzato ad array vuoto
    foreach ($a as $k => $v) {
        if ($v == $val) {
            //trovato elemento da aggiungere in $risultato
            $risultato[] = $k; //aggiunge in fondo all'array
        }
    }
    //assegno alla chiave prof ore Rossi se la materia è database, il valore Casadei se la materia è HTML
    if ($a['materia'] == 'database') {
        $a['prof'] = "Rossi";
    } else if ($a['materia'] == 'HTML') {
        $a['prof'] = "Casadei";
    }
    echo "La materia " . $a['materia'] . " insegnata da {$a['prof']} ha ottenuto questi risultati";
    if ($risultato) {
        echo "<br>contenuto di risultato";
        foreach ($risultato as $r) {
            echo "<br>" . $r;
        }
    } else { //false se è un array vuoto
        echo "<br>Nessun risultato";
    }
    ?>
</body>

</html>