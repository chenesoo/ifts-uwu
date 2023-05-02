<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>prova cookies</title>
</head>

<body>
    <?php
    if (array_key_exists('utenteSito', $_COOKIE)) {
        echo "bentornato";
    } else
        echo "benvenuto";
    if (array_key_exists('nome', $_SESSION))
        echo " " . $_SESSION['nome'];
    ?>
    nel mio sito!

</body>

</html>