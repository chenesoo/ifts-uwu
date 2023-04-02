<?php
function connessione_db(){
    global $connessione;
    //connessione al db ifts
    $dsn = "mysql:dbname=ifts;host=localhost";
    try {
        
        //1. connesssione
        $connessione = new PDO($dsn, "root", "");
    } catch (PDOException $e) {
        echo("Errore di connessione<br>" . $e->getMessage()."<br><br>");
    }
    
}

function fz_sql($sql, $binds=[]){
    global $connessione;
    if(!isset($connessione)){
        //settiamo $connessione
        Connessione_db();
    }
$records=[];
//2. preparo lo statement (istruzione sql = query)
$st = $connessione->prepare($sql);

//3. bind
foreach($binds as $bind){
    $st->bindParam($bind['segnaposto'], $bind['var']);
}

//4. eseguo lo statement preparato
$st->execute();

//5. fetch - recupero dei dati estratti (solo con select)
$records = $st->fetchAll(PDO::FETCH_ASSOC);

//se tutto è andato bene, estrae i record
return $records;
}




?>