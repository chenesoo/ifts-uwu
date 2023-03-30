<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operazioni</title>
</head>

<body>
    <?php
    $a = 10;
    $b = 2;
    $c = $a + $b;
    echo '$c = ' . $c;
    echo "<br>";
    echo '$a + $b = $c <br>';
    echo "$a + $b = $c <br>";
    echo $a * $b . "<br>";
    echo "$a * $b = " . ($a * $b) . "<br>";
    $s = "stringa";
    echo $s . $a . "<br>";
    //modulo %: resto intero della divisione
    //5 % 2 vale 1 --> il risultato è 2 e il resto è 1
    echo $a >= $b . "<br>";
    //operatore ternario
    echo "a = $a e b = $b" . "<br>";
    $risultato = ($a >= $b ? ($a == $b ? "a uguale a b" : "a maggiore di b") : "b maggiore di a");
    echo $risultato . "<br><br>";
    //media tra $a e $b
    echo 'media tra $a e $b = ' . $media = ($a + $b) / 2;
    echo "<br>";
    //invertire il contenuto di $a e $b
    echo "prima a = $a e b = $b <br>";
    $temp = $a;
    $a = $b;
    $b = $temp;
    echo "ora a = $a e b = $b <hr>";

    //operatore ++ e --
    echo "prima a = $a <br>";
    //$a++; //$a = $a + 1 //PRIMA restituisce $a e POI incrementa
    //++$a; //PRIMA incrementa $a e POI restituisce il valore già incrementato 
    echo "ora a = " . ++$a . "<br>";

    //operatori logici --> AND &&
    $x = 100;
    //$compreso = ($x >= $a) && ($x <= $b);
    echo (($x >= $a) && ($x <= $b)) ? "x compreso" : "x non compreso"."<br>";
    //OR ||
    $nome1 = "Mario";
    $nome2 = "Giuseppe";
    $nome = "Mario";
    $nome_corretto = (($nome == $nome1) || ($nome == $nome2)) ? "nome corretto" : "nome non corretto";
    echo $nome_corretto;
    ?>
</body>

</html>