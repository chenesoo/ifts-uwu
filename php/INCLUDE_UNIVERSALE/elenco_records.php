<?php
function elenco_records($records, $chiave)
{
    foreach ($records as $record) {
        echo $record[$chiave] . "<br>";
    }
}

function elenco_chiavi_di_records($records, $chiavi){
    foreach ($records as $record) {
        foreach($chiavi as $chiave)
        echo $record[$chiave] . "<br>";
    }
}




?>
