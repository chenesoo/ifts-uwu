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
    /*
    1. Realizzare una pagina php che presenti una sequenza di numeri interi con sfondo alternato per
ogni riga. I dati elencati devono rispettare le seguenti regole:
 la sequenza deve iniziare da un numero assegnato (memorizzato nella variabile $inizio) e
analizzare tutti gli interi successivi;
 l&#39;analisi deve essere ripetuta per un numero di volte assegnato (memorizzato nella variabile
$ripetizioni);
 se il numero considerato corrisponde al giorno della data corrente, deve essere scritto in
grassetto;
 di ogni numero considerato, scrivere sulla stessa riga il valore del precedente e del
successivo: In mezzo a questi due valori, scrivere il numero considerato in rosso
2. Al termine dell&#39;elenco, separando con una riga orizzontale, scrivere:
 i dati assegnati, con questa specifica frase: “$inizio: &#39;…&#39; $ripetizioni: &#39;…&#39; “;
 l&#39;ultimo numero scritto (tra quelli considerati): “ultimo numero considerato: &#39;…&#39; ” ;
 quante volte è stato scritto un numero successivo multiplo di 10.
3. Modificare l&#39;algoritmo che produce la lista del punto 1, inserendo la condizione che non si deve
mai superare il numero rappresentato dall&#39;anno corrente.
    */
    $inizio = 31;
    $bc1 = "#ccc";
    $bc2 = "#fff";
    $ripetizioni = 31;
    $pari = 0;
    $giorno = date("d");
    $ultimo = 0;
    $multiplo = 0;
    for ($i = 1; $i <= 31; $i++) {
        $bc = $bc1;
        if ($i == $giorno) {
            $bc = $bc1;
            if ($i % 2) { //$i dispari
                $bc = $bc2;
            }
            echo "<div style='background-color:$bc'>";
            echo "<b>$i</b>";
            echo " ---> " . ($i - 1) . " - <span style='color:red'>" . ($i) . "</span>" . " - " . ($i + 1);
        } else {
            if ($i % 2) { //$i dispari
                $bc = $bc2;
            }
            echo "<div style='background-color:$bc'>";
            echo $i;
            echo " ---> " . ($i - 1) . " - <span style='color:red'>" . ($i) . "</span>" . " - " . ($i + 1);
        }
        if (!($i % 10)) {
            ++$multiplo;
        }
        echo "</div>";
        ++$ultimo;
    }
    echo "<hr>";
    echo '$inizio: ' . "'$inizio' " . '$ripetizioni: ' . "'$ripetizioni'<br>";
    echo "ultimo numero considerato: " . $ultimo . "<br>";
    echo "i multipli di 10 sono: " . $multiplo;

    ?>
</body>

</html>