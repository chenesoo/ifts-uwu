<!-- Antonio, Bruno e Carlo sono andati a pranzo al ristorante, e hanno
ordinato:

• Antonio: tortellini in panna, €9.00, contorno di verdure,
€5.00, caffè, €1.00

• Bruno: gramigna con salsiccia, €8.00, contorno di verdure, €
5.00, caffè, €1.00

• Carlo: Hamburger, €11.00, patate fritte, €4.00, caffè, €1.00

Quanto ha speso ogni persona? Quanto in totale? E quanto in media?

Se decidessero di dividere in parti uguali, arrotondando all’euro,
quanto lascerebbero di mancia? -->


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Esercizio 1</title>
</head>

<body>
    <?php
    $tortellini = 9;
    $verdure = 5;
    $caffe = 1;
    $gramigna = 8;
    $hamburger = 11;
    $patate = 4;
    $tot_antonio = $tortellini + $verdure + $caffe;
    echo "Antonio ha speso €$tot_antonio<br>";
    $tot_bruno = $gramigna + $verdure + $caffe;
    echo "Bruno ha speso €$tot_bruno<br>";
    $tot_carlo = $hamburger + $patate + $caffe;
    echo "Carlo ha speso €$tot_carlo<br>";
    $tot = $tot_antonio + $tot_bruno + $tot_carlo;
    echo "In totale hanno speso €$tot<br>";
    $media = $tot / 3;
    echo "La media è €$media";
    ?>
</body>

</html>