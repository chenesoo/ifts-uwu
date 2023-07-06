<?php
include_once("include/connessione_db.php")
    ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dettagli prodotto</title>
</head>

<body>
    <?php
    $id = $_REQUEST['id'];
    $binds[0] = ['segnaposto' => 'id', 'var' => $id];
    fz_sql("UPDATE prodotti 
        SET pro_visite = pro_visite + 1 
        WHERE pro_id = :id", $binds);

    $prodotti = fz_sql("SELECT * FROM prodotti 
        INNER JOIN categorie ON cat_id = pro_cat_id 
        WHERE pro_id = :id", $binds);

    $prodotto = $prodotti[0];
    echo "Categoria: ".$prodotto['cat_nome']."<br>";
    echo "<b>".$prodotto['pro_nome']."</b>"."<br>";
    echo $prodotto['pro_descrizione']."<br>";
    echo "&euro;".number_format($prodotto['pro_prezzo'],2,",",".");
    
    ?>
</body>

</html>