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
    <title>Verifica 4</title>
</head>

<body>
    <!-- 1. creazione form -->
    <form method="REQUEST" action="lista_localita.php">
        Cerca località: <input type="text" name=localita><br>
        <button>cerca</button>
    </form>
</body>

</html>
</body>

</html>