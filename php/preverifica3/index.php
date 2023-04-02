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
    //1. contare i records
    $sql_1 = "SELECT COUNT(*) as elenco
    FROM utenti
    WHERE 1";

    $num_rec = fz_sql($sql_1);
    echo "numero totale prenotazioni: " . $num_rec[0]['elenco']."<br>";

    //2 creazione form
    ?>
    <form method="POST" action="utenti_registrati.php" enctype="multipart/form-data">
    e-mail: <input type="email" name=email><br>
        Password: <input type="password" name=password><br>
        <button>registrati</button>
</form> 
</body>
</html>