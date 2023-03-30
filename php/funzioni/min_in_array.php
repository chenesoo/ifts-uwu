 <?php
function min_in_array($a){
    foreach ($a as $v) {
        if( ! isset($min) ) { //entra solo alla prima iterazione
            //non è settata se è la prima iterazione
            $min = $v; //metto in min il primo valore
        }

        if ($min > $v) {
            $min = $v;
        }
    }
    return $min;
}

function somma2($x, $y){
    return $x+$y;
}

function somma3($a, $b, $c)
{
    return somma2(somma2($a, $b), $c);
}

function mediaInventata2($x, $y)
    {
        return ($x + $y) / 2;
    }
    function mediaInventata3($a, $b, $c)
    {
        //return $a + $b + $c;
        return mediaInventata2(mediaInventata2($a, $b), $c);
    }
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
    //Scrivere una funzione che riceve come parametro di ingresso un array e 
    //restituisce il valore del primo elemento in ordine crescente 
    $a = ['nome' => "primo", 'a' => "aaa", 'b' => "terzo"];
    $a = [10, 1, 2, 3, 4];
    $primo=min_in_array($a);
    echo "il primo è: ".$primo;


       //definire la funzione somma2 che somma 2 numeri
    //definire la funzione somma3 che somma 3 numeri, usando la somma2
    
    echo "<br>somma3= ".somma3(1, 2, 3);
    $m=mediaInventata3(3, 3, 3);
    echo "<br>mediaInventata3 = " . number_format($m, 2, ",", ".");
    
    ?>
</body>
</html>