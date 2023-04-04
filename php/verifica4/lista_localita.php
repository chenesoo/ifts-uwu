<?php
include_once("include/connessione_db.php");
include("include/elenco_records.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Risultati ricerca</title>
</head>

<body>
    <?php
    //2. ricerca records
    $requestLocalita = $_REQUEST['localita'];

    $sql = "SELECT citta.citta 
    FROM citta 
    WHERE citta.citta LIKE '%$requestLocalita%' || provincia_nome LIKE '%$requestLocalita%'
        "; //nei risultati potrebbe non esserci la corrispondenza perchè la corrispondenza è nel nome della provincia
    $queryResponse = fz_sql($sql);
    //var_dump($queryResponse);
    ?>
    <?php
    elenco_records($queryResponse, 'citta');

    //3. nome localita del record selezionato
    ?>
    <table style="width:80%" border="1px solid black">
        <tr>
            <th><b> id citta </b></th>
            <th><b> citta </b></th>
            <th><b> provincia sigla </b></th>
            <th><b> provincia nome </b></th>
        </tr>
        <?php
        if (sizeof($queryResponse) > 0) {

            //non funziona questa parte del codice
            foreach ($queryResponse as $record) {
                echo ("<tr><td>" . $record['id_citta'] . "</td>");
                echo ("<td>" . $record['citta'] . "</td>");
                echo ("<td>" . $record['provincia_sigla'] . "</td>");
                echo ("<td>" . $record['provincia_nome'] . "</td></tr>");
            }
        }

        ?>
    </table>
</body>

</html>