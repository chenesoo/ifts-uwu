<?php
include("include/connessione_db.php");
include("include/elenco_records.php");
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

    //5. e 6. scrivere le città e clienti di tutti i campi
    $sql1 = "SELECT DISTINCT citta.citta, nome, cognome
    FROM citta
    INNER JOIN clienti ON id_citta=clienti.citta
    WHERE 1";

    $elenco = fz_sql($sql1);
    elenco_records($elenco, 'citta');
    elenco_records($elenco, 'nome');
    elenco_records($elenco, 'cognome');
    //non riesco ad affiancare i campi
    ?>
</body>

</html>