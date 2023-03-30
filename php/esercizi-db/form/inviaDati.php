<!DOCTYPE html>
<html lang="en">
<?php
include("../../INCLUDE_UNIVERSALE/convert_date.php")
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    Dati ricevuti dal form e inviati all'impostore. Congratulazioni!!<br>
    <?php
    foreach ($_REQUEST as $chiave => $valore) { //$_REQUEST prende i dati sia da GET che da POST
        if($chiave=='dataNascita'){
            $valore=db_2_user($valore);
        }
        echo "$chiave: " . $valore . "<br>";
    }
    ?>
</body>

</html>