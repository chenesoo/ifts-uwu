<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    $p1 = [“Primini Primo”, “Secondini Secondo”];<br>
    $p2 = [“Giannini Gianni”, “Stefanini Stefano”, “Mariolini Maria”,”Giacomini Giacomo”];<br>
    $p3 = [“Violetti Viola”,”Gaietti Gaia”];<br>
    $partecipanti= [$p1, $p2, $p3];<br>
    $corsi = [“Autocad”,”Informatica”,”Inglese”];<br><br>
    Nell’array bidimensionale $partecipanti ogni elemento rappresenta un array di partecipanti ai
    vari corsi svolti dall ente di formazione Enaip. I singoli array $p1, $p2, ecc contengono i
    cognomi e nomi dei partecipanti ad un corso specifico.
    L’array $corsi contiene i nomi dei corsi, nello stesso ordine del primo, cioè il corso Autocad è
    stato seguito dai partecipanti elencati in $p1, Informatica è stato seguito dai partecipanti di $p2,
    ecc.
    Si chiede di svolgere le seguenti attività:
    <ol>
        <li>aggiungere il nuovo partecipante “Novella Novellini” al corso di Informatica</li>
        <li>elencare i nomi di tutti i partecipanti (di tutti i corsi)</li>
        <li>calcolare il numero medio dei partecipanti ai corsi</li>
        <li>indicare il nome del corso con il maggior numero di partecipanti</li>
        <li>tutti i partecipanti devono superare un esame di selezione, che si svolge nello stesso
            giorno e con la stessa commissione: scrivere il nome del partecipante che sarebbe il
            primo in ordine alfabetico a sostenere l esame (tra tutti i partecipanti di tutti i corsi)</li>
        <li>si chiede di aggiungere in fondo ad ogni array dei partecipanti un ulteriore elemento, con
            chiave 'corso'; e valore il nome del corso, fornito nel secondo array</li>



    </ol>
    <?php
    //definisco il primo array
    $p1 = ['Primini Primo', 'Secondini Secondo'];
    $p2 = ['Giannini Gianni', 'Stefanini Stefano', 'Mariolini Maria', 'Giacomini Giacomo'];
    $p3 = ['Violetti Viola', 'Gaietti Gaia'];
    $partecipanti = [$p1, $p2, $p3];
    $corsi = ['Autocad', 'Informatica', 'Inglese'];

    //cerco l'indice dell'array relativo al corso di informatica
    for ($i = 0; $i < 3; $i++) {
        if ($corsi[$i] == 'Informatica') {
            $indice = $i;
        }
    }

    // aggiungo il nuovo partecipante 'Novella Novellini' al corso di Informatica
    $partecipanti[$indice][] = 'Novella Novellini';
    echo "1. ";
    var_dump($partecipanti);

    //elenco tutti i partecipanti di tutti i corsi
    echo "2. ";
    foreach ($partecipanti as $array) {
        foreach ($array as $studente) {
            echo $studente . '<br>';
        }
    }

    //calcolo il numero medio dei partecipanti ai corsi
    //calcolo il numero di corsi
    $n_corsi = count($corsi);

    //calcolo il numero di partecipanti
    $n_partecipanti = 0;
    foreach ($partecipanti as $array) {
        $n_partecipanti += count($array);
    }

    //calcolo il numero medio di partecipanti
    $media = $n_partecipanti / $n_corsi;
    echo '<br>3. la media di partecipanti per corso è: ' . $media . '<br><br>';

    //indicare il nome del corso con il maggior numero di partecipanti
    $max = 0;
    for ($i = 0; $i < count($corsi); $i++) {
        if (count($partecipanti[$i]) > $max) {
            //il numero di partecipanti è superiore al massimo, segno i valori
            $max = count($partecipanti[$i]);
            $corso_max = $i;
        }
    }
    echo "4. il corso con più iscritti è " . $corsi[$corso_max] . "<br>";

    $partecipanti = array_merge($p1, $p2, $p3);
    sort($partecipanti);
    echo "<br>5. il primo studente a sostenere l'esame è $partecipanti[0]";
    
    $i = 0;
    foreach ($partecipanti as &$p) {
        $p[] = ['corso' => $corsi[$i]];
        $i++;
    }
    
    
    
    


    echo "<hr>";







    //definisco il secondo array
    $s1 = ['cognome' => 'Primini', 'nome' => 'Primo', 'corso' => 'Autocad'];
    $s2 = ['cognome' => 'Secondini', 'nome' => 'Secondo', 'corso' => 'Autocad'];
    $s3 = ['cognome' => 'Giannini', 'nome' => 'Gianni', 'corso' => 'Informatica'];
    $studenti = [$s1, $s2, $s3];

    // aggiungo il nuovo partecipante 'Novella Novellini' al corso di Informatica
    $studenti[] = ['cognome' => 'Novellini', 'nome' => 'Novella', 'corso' => 'Informatica'];
    echo "1.";
    var_dump($studenti);

    //elenco tutti i partecipanti di tutti i corsi
    echo "2.<br>";
    foreach ($studenti as $array) {
        echo $array['cognome'] . " " . $array['nome'] . '<br>';
    }

    //calcolo il numero medio dei partecipanti ai corsi
    //calcolo il numero di corsi
    $n_corsi = 0;
    $elenco_corsi = [];
    foreach ($studenti as $studente) {
        //inserisco il corso in un array
        $elenco_corsi[] = $studente['corso'];
    }

    //rimuovo i corsi duplicati
    $elenco_corsi = array_unique($elenco_corsi);

    //conto i corsi unici
    $n_corsi = count($elenco_corsi);
    //echo "i corsi sono ".$n_corsi;

    //conto gli studenti
    $n_partecipanti = count($studenti);

    //calcolo la media
    $media = $n_partecipanti / $n_corsi;

    echo '<br>3. la media di partecipanti per corso è: ' . $media . '<br>';

    //indicare il nome del corso con il maggior numero di partecipanti
    $elenco_corsi = [];
    $n_studenti = [];

    foreach ($studenti as $studente) {
        //verifico se il corso è già presente nell'array
        if (array_key_exists($studente['corso'], $n_studenti)) {
            //il corso esiste già, aumento i partecipanti
            $n_studenti[$studente['corso']]++;
        } else {
            //il corso non esiste, lo aggiungo all'array e inizializzo i partecipanti a 1
            $n_studenti[$studente['corso']] = 1;
        }
    }

    $max = 0;
    foreach ($n_studenti as $key => $value) {
        if ($value > $max) {
            //il numero di partecipanti è superiore al massimo, segno i valori
            $max = $value;
            $corso_max = $key;
        }
    }
    echo "4. il corso con più iscritti è " . $corso_max . "<br>";

    $primo_studente = $studenti[0]['cognome'] . ' ' . $studenti[0]['nome'];

    //trovo il primo studente in ordine alfabetico
    echo "5.<br>";
    foreach ($studenti as $studente) {
        $nome_completo = $studente['cognome'] . ' ' . $studente['nome'];
        // Confrontiamo il nome completo dell'attuale studente con quello del primo studente in ordine alfabetico trovato finora
        if (strcmp($nome_completo, $primo_studente) == -1) {
            // Aggiorniamo il nome del primo studente in ordine alfabetico
            $primo_studente = $nome_completo;
        }
    }

    echo "il primo studente a sostenere l'esame è $primo_studente";
    ?>
</body>

</html>