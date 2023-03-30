<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variabili</title>
</head>

<body>
    <?php
    $var1 = 1;
    //echo $var1;
    $var1 = "stringa";
    //echo $var1;
    $var2 = "pippo";
    //echo $var2;
    echo "$var1 <br> $var2"; //sostituisce il nome della variabile con il suo contenuto
    echo "<br>";
    echo 'ciao a tutti $var1'; //non sostituisce il contenuto, ma trasforma tutto in testo normale
    echo "<br>";
    echo "apice singolo: '";
    echo "<br>";
    echo 'virgolette: "';
    echo "<br>";
    //stampare "variabile $var1 = stringa"
    echo ' \' la variabile $var1 = '."$var1"; //"." unisce più variabili
    //  "\" annulla il significato del carattere che è attaccato a \
    echo "simbolo speciale \\"; // "\\" annulla il "\" precedente 
    echo "<hr>"; //traccia una riga
    /* PER CASA
    assegnare ad una var la stringa "andare a casa"
    scrivere in una sola echo: l'insegnante dice "è ora di (contenuto della var)" */
    $s = "andare "."a"." casa!";

    echo "1) l'insegnante dice \"è ora di $s\"";
    echo "<br>";
    echo "2) l'insegnante dice \"è ora di ".$s.'"';
    echo "<br>";
    echo '3) l\'insegnante dice "è ora di '.$s.'"';
    ?>
</body>

</html>