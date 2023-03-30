<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connessione</title>
</head>

<body>
    <?php
    $dsn = "mysql:dbname=ifts;host=127.0.0.1";

    try {
        //codice che può lanciare una Eccezione
        //1. connessione
        $con = new PDO($dsn, "root", "");
        //echo "connessione effettuata";
        $area_geografica = "Isole";
        $regione = "Sicilia";
        //2. praparo lo statement (istruzione sql = query)
        $sql = "SELECT * FROM citta as c
                INNER JOIN regioni as r ON r.ID_regione = c.regione
                WHERE area_geografica = :area_geografica
                AND r.regione = :regione ";
        $st = $con->prepare($sql); //$st è un oggetto della classe PDOStatement
        //echo "statement preparato";
        //3. bind
        $st->bindParam('area_geografica', $area_geografica);
        $st->bindParam('regione', $regione);
        //4. eseguo lo statement preparato
        $st->execute();
        //echo "statement eseguito";
        //5. fetch - recupero dei dati estratti (solo con select)
        $righe = $st->fetchAll(PDO::FETCH_ASSOC);


        //2° PDOstatement
        $st2 = $con->prepare("SELECT * FROM prenotazioni");
        $st2->execute();
        $prenotazioni = $st2->fetchAll(PDO::FETCH_ASSOC);

    } catch (PDOException $e) {
        echo "Errore di connessione ";
        echo $e->getMessage();
    }



    //se tutto è andato bene $righe contiene 
    //l'array bidimensionale dei record estratti
    echo "Il numero di città è " . count($righe) . "<br>";
    //print_r($righe);
    echo "<pre>";
    var_dump($righe);
    echo "</pre>";




    //PER CASA
    //query di insert sulla tabella regioni
    //se volete cercate il metodo di PDOStatement che restituisce l'id del record appena inserito
    //poi la delete della stessa regione appena inserita
    
    ?>



</body>

</html>