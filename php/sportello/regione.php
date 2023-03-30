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
    //faccio la connessione al db da un file esterno
    include("../include/connessione_db.php"); 
    $regioni = connessione_db("SELECT * FROM regioni"); //richiamo la funzione dal file esterno

    $nome_regione = "Sicilia";
    $risultato = funz_regione($nome_regione, $regioni);
    if ($risultato) { //se array è vuoto allore è false (non entra)
        echo "Trovata regione $nome_regione con area geografica " . $risultato['area_geografica'];
    }

    //estrarre dal db tutti i dati della regione $regione
    //definire la funzione che estrae da $regioni la regione $regione
    function funz_regione($r, $regioni)
    {
        foreach ($regioni as $regione) {
            if ($regione['regione'] == $r) {
                return $regione;
            }
        }
        return [];
    }
    ?>
</body>

</html>