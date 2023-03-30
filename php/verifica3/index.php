<?php
include("include/connessione_db.php");
include("include/elenco_records.php");
include("include/convert_date.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>verifica db</title>
</head>

<body>
    <?php

    //es 2 - elencare la data di partenza di tutte le prenotazioni e il numero totale di prenotazioni
    $sql_1 = "SELECT * 
    FROM prenotazioni
    WHERE 1";

    $elenco_prenotazioni = fz_sql($sql_1);
    foreach ($elenco_prenotazioni as &$prenotazione) {
        $prenotazione['partenza'] = db_2_user($prenotazione['partenza']);
    }
    //PROMEMORIA: TOGLIERE IL COMMENTO QUA SOTTO
    elenco_records($elenco_prenotazioni, 'partenza');
    echo "<hr>";
    $sql_2 = "SELECT DISTINCT count(*) AS n_citta 
    FROM prenotazioni 
    where 1";

    $num_citta = fz_sql($sql_2);
    echo "numero totale prenotazioni: " . $num_citta[0]['n_citta']."<br>";

    //es 3 - scrivere il nome e cognome dell'ultimo cliente partito
    $sql_3 = "SELECT nome, cognome, partenza
    FROM clienti
    INNER JOIN prenotazioni ON ID_cliente=cliente 
    ORDER BY partenza DESC
    LIMIT 0, 1";

    $ultimo_cliente = fz_sql($sql_3);
    echo "l'ultimo cliente partito è " . $ultimo_cliente[0]['nome'] . " " . $ultimo_cliente[0]['cognome']."<br>";

    $sql_4="SELECT partenza, arrivo
    FROM prenotazioni
    WHERE 1";


//non riesco a fare la differenza tra 2 date
$giorni_permanenza=fz_sql($sql_4);
    foreach($giorni_permanenza as $diff){
        $formato_partenza['partenza'] = db_2_user($formato_partenza['partenza']);
        $formato_arrivo['arrivo'] = db_2_user($formato_arrivo['arrivo']);
    }
    ?>
</body>

</html>