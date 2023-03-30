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
    $categoria1 = ['nome' => "calzature", 'n_prodotti' => 20, 'fatturato' => 1200];
    $categoria2 = ['nome' => "camicie", 'n_prodotti' => 12, 'fatturato' => 800];
    $categoria3 = ['nome' => "pantaloni", 'n_prodotti' => 5, 'fatturato' => 650];
    $categorie = [$categoria1, $categoria2, $categoria3];

    //inizializzo l'array che conterrà i nomi delle categorie
    $nomi_cat = [];

    //inizializzo a 0 la somma di tutti i prodotti
    $tot_prod = 0;

    //inizializzo il nome della categoria con il fatturato più alto e fatturato max a 0
    $max_fatturato = 0;
    $nome_cat_max = "";

    foreach ($categorie as $categoria) {
        //elenco i nomi delle categorie
        $nomi_cat[] = $categoria['nome'];

        //sommo tutti i prodotti
        $tot_prod += $categoria['n_prodotti'];

        //trovo il nome della categoria con il fatturato più alto
        if ($categoria['fatturato'] > $max_fatturato) {
            $max_fatturato = $categoria['fatturato'];
            $nome_cat_max = $categoria;
        }
    }
    //inizializzo gli anni di attività dell'azienda
    $anni_attivita = 10;

    //inizializzo il fatturato di quest'anno
    $fatturato_ora = 2000;

    //inizializzo l'aumento del fatturato di ogni anno
    $fatt_diff = 100;

    //inizializzo l'array che conterrà il fatturato di ogni anno
    $fatt_annuo[$anni_attivita] = [];
    for ($i = 0; $i < $anni_attivita; $i++) {
        if ($anni_attivita < 10) {
            $fatt_annuo[$i + 1] = $fatturato_ora - $fatt_diff;
        }
    }


    //output
    echo "1)<br><br>Nomi di tutte le categorie (sotto)";
    var_dump($nomi_cat);
    echo "<hr>";
    echo "2)<br><br>Il totale di tutti i prodotti >>> <b><i>$tot_prod</b></i><hr>";
    echo "3)<br><br>La categoria con il fatturato più alto >>> <b><i>" . $nome_cat_max['nome'] . "</i></b>" . " con fatturato >>> <b><i>€" . $max_fatturato . "</i></b><hr>";
    $return = [$somma_fatturato, $media_fatturato] = fatturato_totale($categorie);
    echo "4)<br><br>La somma di tutti i fatturati >>> <b><i>€" . $somma_fatturato . "</i></b><hr>";
    echo "5)<br><br> La media tra i fatturati >>> <b><i>€" . number_format($media_fatturato, 2, ".", ",") . "</i></b><hr>";
    echo "6)<br><br>Gli array dopo aver aggiunto il campo 'anno' (sotto)";

    //output es. 6)
    foreach ($categorie as $categoria) {

        //aggiungo l'anno in tutte le categorie
        $categoria['anno'] = date("Y");

        //output degli array con il nuovo campo 'anno'
        var_dump($categoria);
    }










    //funzioni
    function fatturato_totale($a)
    {
        //inizializzo la somma del fatturato a 0
        $somma_fatturato = 0;

        foreach ($a as $a1) {
            //faccio la somma di tutti i fatturati
            $somma_fatturato += $a1['fatturato'];

            //faccio la media dei fatturati
            $media_fatturato = $somma_fatturato / count($a1);
        }

        //fine funzione fatturato_totale
        return $return = [$somma_fatturato, $media_fatturato];
    }
    ?>
</body>

</html>