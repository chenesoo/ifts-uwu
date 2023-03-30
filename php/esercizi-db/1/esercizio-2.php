<?php
include("../../INCLUDE_UNIVERSALE/connessione_db.php");
include("../../INCLUDE_UNIVERSALE/elenco_records.php")
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
    $nome_citta = "Rimini";
    $sql = "SELECT * FROM citta WHERE citta = :nome_citta ";
    $citta = fz_sql($sql,  //eseguo una query
        [
            ['segnaposto'=>"nome_citta",'var'=>$nome_citta]
        ]
    ); 
    elenco_records($citta, 'citta'); //'citta' è un campo della tabella citta

    $prenotazioni = fz_sql("SELECT * FROM prenotazioni LIMIT 0,10"); //eseguo una query
    elenco_records($prenotazioni, 'ID_prenotazione'); //'ID_prenotazione' è un campo della tabella prenotazioni
    ?>

</body>

</html>