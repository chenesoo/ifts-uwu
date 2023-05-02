<?php
session_start();
include("../INCLUDE_UNIVERSALE/autenticazione_login.php");
include("../INCLUDE_UNIVERSALE/connessione_db.php");
autenticazione();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elenco clienti</title>
</head>

<body>
    **RISERVATISSIMO**<br>
    Questo è l'elenco dei clienti:<br><br>
    <?php
    $sql="SELECT DISTINCT * FROM clienti";
    $clienti=fz_sql($sql);
    foreach($clienti as $cliente){
        echo $cliente['nome']. " ". $cliente['cognome']." "."<a href=elenco_prenotazioni.php?id={$cliente['ID_cliente']}>prenotazioni a suo nome</a>"."<br>";
    }
    ?>
</body>

</html>