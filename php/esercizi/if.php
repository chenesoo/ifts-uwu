<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Esercizio 2</title>
</head>

<body>
    <?php
    //Dato un numero, si stampi il suo valore assoluto
    $num = -6;
    if ($num >= 0) {
        echo "Valore assoluto: $num<hr>";
    } else {
        $val_ass = abs($num);
        echo "Valore assoluto: $val_ass<hr>";
    }

    //Trovare il maggiore tra 3 numeri (o 3 caratteri)
    $num1 = 16;
    $num2 = 10;
    $num3 = 11;
    if ($num1 > $num2 && $num1 > $num3) {
        echo "il maggiore è $num1<br>";
    } else if ($num2 > $num3) {
        echo "il maggiore è $num2<br>";
    } else {
        echo "il maggiore è $num3<br>";
    }
    if ($num1 == $num2 || $num1 == $num3) {
        echo "Un altro numero è uguale al maggiore";
    }
    if ($num2 == $num3) {
        echo "Un altro numero è uguale al maggiore";
    }
    if ($num1 == $num2 && $num1 == $num3 && $num2 == $num3) {
        echo "Tutti i numeri sono uguali";
    }
    echo "<hr>";

    //Un supermercato offre una politica di sconto ai propri clienti: con l’acquisto di 3 prodotti applica il 10% di sconto sull’oggetto meno costoso. Determinare il totale (imponibile + iva, supponendo l’iva al 22%)
    $prodotto1 = 50;
    $prodotto2 = 30;
    $prodotto3 = 45;
    if ($prodotto1 < $prodotto2 && $prodotto1 < $prodotto3) {
        $sconto = ($prodotto1 / 100) * 10;
        $prod_scontato = $prodotto1 - $sconto;
        $tot_prodotti = $prod_scontato + $prodotto2 + $prodotto3;
    } else if ($prodotto2 < $prodotto3) {
        $sconto = ($prodotto2 / 100) * 10;
        $prod_scontato = $prodotto2 - $sconto;
        $tot_prodotti = $prodotto1 + $prod_scontato + $prodotto3;
    } else {
        $sconto = ($prodotto3 / 100) * 10;
        $prod_scontato = $prodotto3 - $sconto;
        $tot_prodotti = $prodotto1 + $prodotto2 + $prod_scontato;
    }
    echo "Il totale dei prodotti è €$tot_prodotti iva esclusa<br>";
    $iva = ($tot_prodotti / 100) * 22;
    echo "L'iva è €$iva<br>";
    $tot = $tot_prodotti + $iva;
    echo "Il totale dei prodotti è €$tot iva compresa<hr>";

    //In una gara sportiva ci sono 3 giudici, ognuno dei quali esprime il proprio voto in un range da 0 a 10 (controllare che il voto sia compreso nel range prestabilito). Il regolamento stabilisce che si scarti il voto più alto e che il punteggio finale sia dato dalla media dei voti rimanenti
    $voto1 = 6;
    $voto2 = 7;
    $voto3 = 4;
    if ($voto1 <= 10 && $voto1 >= 0 && $voto2 <= 10 && $voto2 >= 0 && $voto3 <= 10 && $voto3 >= 0) {
        if ($voto1 > $voto2 && $voto1 > $voto3) {
            $media = ($voto2 + $voto3) / 2;
        } else if ($voto2 > $voto3) {
            $media = ($voto1 + $voto3) / 2;
        } else {
            $media = ($voto1 + $voto2) / 2;
        }
        echo "Il punteggio finale è $media";
    } else {
        echo "Uno o più voti non rientrano nel range";
    }
    ?>
</body>

</html>