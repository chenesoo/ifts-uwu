<?php
include("../INCLUDE_UNIVERSALE/connessione_db.php");
include("../INCLUDE_UNIVERSALE/elenco_records.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <?php

    //es 2
    $sql_1 = "SELECT * 
    FROM citta 
    INNER JOIN regioni ON id_regione = citta.regione 
    WHERE area_geografica = 'sud'";
    
    $citta = fz_sql($sql_1);
    elenco_records($citta, 'citta');
    echo "<hr>";

    //es 3
    $sql_2 = "SELECT DISTINCT count(*) AS n_citta 
    FROM citta 
    INNER JOIN regioni ON citta.regione = regioni.ID_regione 
    where regioni.area_geografica = 'sud'";

    $numero_citta = fz_sql($sql_2);
    echo $numero_citta[0]['n_citta'];

    //es 4
    $sql_3 = "SELECT regioni.regione AS regione, COUNT(*) AS n_citta
   FROM citta
   INNER JOIN regioni ON citta.regione = regioni.ID_regione
   where regioni.area_geografica = 'sud'
   GROUP BY regioni.regione";

$regioni = fz_sql($sql_3);
$regionemax=$regioni[0]['regione'];
$cittamax=$regioni[0]['n_citta'];
for ($i = 1; $i < count($regioni); $i++ ){
    if ($regioni[$i]['n_citta']>$cittamax){
        $regionemax=$regioni[$i]['regione'];
        $cittamax=$regioni[$i]['n_citta'];
    }
}
echo "<hr>";
echo $regionemax, $cittamax;

//es 5
class Regione {
    private $nome = "";
    public $numeroCittaCollegate = 0;

    public function __construct($nomeRegione){
        $this->nome = $nomeRegione; 
    }

    public function getName(){
        return $this->nome;
    }

 public function valorizzaNumCitta(){
    $sql_5= "SELECT regioni.regione AS regionecercata, COUNT(*) AS n_citta
    FROM citta
    INNER JOIN regioni ON citta.regione = regioni.ID_regione
    where regioni.regione = :nomeregione
    GROUP BY regioni.regione";
    $regione_n_citta=fz_sql($sql_5);
    $this->numeroCittaCollegate = $regione_n_citta[0]['n_citta'];
 }
 public function getNumberOfCity(){
    return $this->numeroCittaCollegate;
}
}

$campania = new Regione('Campania');
$campania->valorizzaNumCitta();

$lombardia = new Regione('Lombardia');
$lombardia->valorizzaNumCitta();





    ?>
</body>

</html>