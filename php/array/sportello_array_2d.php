<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>esempio_2d</title>
</head>

<body>
    <?php
    $s1 = ['voto' => 100, 'cognome' => 'Rossi', 'nome' => "Mario", 'corso' => "Informatica"];
    $s2 = ['voto' => 90, 'cognome' => 'Rossini', 'nome' => "Mariolino", 'corso' => "Inglese"];
    $s3 = ['voto' => 80, 'cognome' => 'Bossi', 'nome' => "Maria", 'corso' => "Informatica"];
    $studenti = [$s1, $s2, $s3];

    $i = 0;
    $somma = [];
    foreach ($studenti as $s) {
        echo "Studente n. " . ++$i . "<br>";
        foreach ($s as $v) {
            echo $v . "<br>";
        }
        $somma += $s['voto'];
        echo "<br>";
    }
    if(count($studenti) >0){
        echo "media= ". ($somma/count($studenti));
    }
    else{
        echo "non ci sono studenti";
    }
    ?>
</body>

</html>