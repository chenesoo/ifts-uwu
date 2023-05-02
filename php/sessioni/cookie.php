<?php
//mettere SEMPRE i cookie come prima istruzione
setcookie('utenteSito', 1, time()+3600); //scade dopo 1 ora
//eliminare un cookie
//setcookie('utenteSito', 1, time()-1);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cookies</title>
</head>

<body>
    elenco cookie: <br>
    <?php
    print_r($_COOKIE);
    if (array_key_exists('utenteSito', $_COOKIE)) {
        echo "<br><br>bentornato";
    } else
        echo "<br><br>benvenuto";
    ?>
    nel mio sito!
</body>

</html>