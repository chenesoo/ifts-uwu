<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Bidimensionali</title>
</head>

<body>
    <?php
    $s1 = ['nome' => "Mario", 'cognome' => "Rossi", 'voto' => 10];
    $s2 = ['nome' => "Giacomo", 'cognome' => "Verdi", 'voto' => 10];
    $s3 = ['nome' => "Maria", 'cognome' => "Rossini", 'voto' => 5];
    $s4 = ['nome' => "Osvaldo", 'cognome' => "Faustini", 'voto' => 3];

    $s = [$s1, $s2, $s3, $s4];
    //print_r($s1);
    ?>
    <table>
        <tr>
            <th>Nome</th>
            <th>Cognome</th>
            <th>Voto</th>
        </tr>
        <?php
        foreach ($s as $studente) {
        //print_r($studente);
        echo "<tr>";
            echo "<td>";
                echo $studente['nome'];
                echo "</td>
            <td>";
                echo $studente['cognome'];
                echo "</td>
            <td>";
                echo $studente['voto'];
                echo "</td>";
            echo "
        </tr>";

        }
        echo "
    </table>";

    //PER CASA creare la tabella sopra 
        //senza conoscere le chiavi dei singoli elementi di $s
        //2 foreach innestati
        //da fare senza leggere sotto
        echo "<table>";
        foreach ($s as $studente) {
            echo "<tr>";
            foreach ($studente as $k => $v) {
                echo "<td> $v</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    ?>
</body>

</html>