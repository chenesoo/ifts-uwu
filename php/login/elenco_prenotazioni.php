<?php
session_start();
include("../INCLUDE_UNIVERSALE/autenticazione_login.php");
include("../INCLUDE_UNIVERSALE/convert_date.php");
include("../INCLUDE_UNIVERSALE/connessione_db.php");
autenticazione();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elenco prenotazioni</title>
</head>

<body>
    **RISERVATISSIMO**<br>
    Questo è l'elenco dei clienti:<br><br>
    <?php
    $id = "";
    $binds = [];
    $sql = "SELECT * FROM prenotazioni";
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $binds = [['segnaposto' => 'id', 'var' => $id]];
        $sql .= "WHERE cliente=:id";
        echo "del cliente con id = $id <br>";
    }
    $prenotazioni = fz_sql($sql, $binds);
    foreach ($prenotazioni as $prenotazione) {
        echo db_2_user($prenotazione['arrivo']) . " " . db_2_user($prenotazione['partenza']) . "<br>";
    }
    ?>
</body>

</html>