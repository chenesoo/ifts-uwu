<?php

//FROM DATE DB (aaaa-mm-gg) TO DATE USER (gg/mm/aaaa)
function db_2_user($data)
{
    $anno = substr($data, 0, 4);
    $mese = substr($data, 5, 2);
    $giorno = substr($data, 8, 2); //fino alla fine
    $ore = substr($data, 11, 2);
    $minuti = substr($data, 14, 2);
    $secondi = substr($data, 17, 2);
    return "$giorno/$mese/$anno $ore:$minuti:$secondi";
}

//FROM DATE USER (gg/mm/aaaa) TO DATE DB (aaaa-mm-gg)
function user_2_db($data)
{
    $a = explode("/", $data); //restituisce un array
    $giorno = $a[0];
    $mese = $a[1];
    $anno = $a[2];
    return "$anno-$mese-$giorno";
}
