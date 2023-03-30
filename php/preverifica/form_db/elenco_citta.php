<?php
include("Citta.php");
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
//selezionare le citta di un area geografica scelta nella pag precedebnte
$dsn = "mysql:dbname=ifts;host=127.0.0.1";
    try {
        //1
        $connessione = new PDO($dsn, "root", "");
        //2
        $sql = "SELECT * FROM citta ";
        $st = $connessione->prepare($sql);
        //3 bind non serve
        //4 execute
        $st->execute();
        //5
        $righe = $st->fetchAll();
    } catch (PDOException $e) {
        echo "Errore di connessione" . $e->getMessage();
    }
//istanziare un nuovo oggetto di classe Citta per ogni citta selezionata
foreach($righe as $riga){
    $c=new Citta($riga['citta']);
    //output
    echo $c->getNome()."<br>";
}
    ?>
</body>
</html>