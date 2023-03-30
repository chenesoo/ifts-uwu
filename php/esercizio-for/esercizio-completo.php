<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Esercizio tipo verifica</title>
</head>

<body>
    <?php
    /*1. Realizzare una pagina php che presenti una sequenza di numeri interi con sfondo alternato per
ogni riga. I dati elencati devono rispettare le seguenti regole:
 la sequenza deve iniziare da un numero assegnato (memorizzato nella variabile $start) e
analizzare tutti gli interi precedenti;
 l'analisi deve essere ripetuta per un numero di volte assegnato (memorizzato nella variabile
$repeat);
 se il numero considerato corrisponde al mese della data corrente, deve essere scritto in
corsivo;
 di ogni numero considerato, scrivere sulla stessa riga il suo valore e il valore doppio (in
rosso)
2. Al termine dell elenco, separando con una riga orizzontale, scrivere:
 i dati assegnati, con questa specifica frase: “$start: '…' $repeat: '… “;
 quanti numeri pari sono stati scritti (considerando anche i valori del doppio);
 il numero di ripetizioni effettivamente eseguite.
3. Modificare l'algoritmo che produce la lista del punto 1, inserendo la condizione che non si
devono considerare i numeri negativi.
FACOLTATIVO: realizzare una seconda pagina identica alla precedente con una istruzione ciclica
differente*/

    $start = 10;
    $numero_iterazioni = 0;
    $bc1 = "#ccc";
    $bc2 = "#fff";
    $repeat = 16;
    $pari = 0;
    for ($i = $start; ($i > ($start - $repeat)) && ($i >= 0); $i--) {
        $bc = $bc1;
        if ($i % 2) { //$i dispari
            $bc = $bc2;
        } else {
            ++$pari;
        }
        ++$pari;
        echo "<div style='background-color:$bc'>";
        echo $i;
        echo " - " . "<span style='color:red'>" . ($i * 2) . "</span>";
        echo "</div>";
        ++$numero_iterazioni;
    }
    echo "<hr>";
    echo '$numero_iterazioni: ' . "$numero_iterazioni<br>";
    echo "pari: $pari";
    ?>
</body>

</html>