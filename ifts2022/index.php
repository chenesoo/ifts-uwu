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
    echo "04";
    ?>
</body>

</html>

<?php
/**
 * Calcola il fattoriale di un numero
 * 
 * @param integer $valore: valore del quale calcolare il fattoriale
 * @return integer
 */
function elabora($numero, $parola)
{
    $risultato = 0;
    if ($numero == 1) {
        $risultato = 'errore';
    } else {
        for ($i = 0; $i <= $numero; $i++) {
            echo $parola;
            $risultato = $risultato + 1;
        }
    }
    return $risultato;
}
?>