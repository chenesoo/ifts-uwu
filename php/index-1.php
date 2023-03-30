<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo "Titolo dinamico in php" ?></title>
</head>

<body>
    <p>
        Hello world!
        <?php
        //commento in linea
        /* commento delimitato
        fino alla chiusura */echo "ciao";
        echo "Ciao a tutti quelli dell'ultima fila";
        echo date("H:i:s");
        ?>
    </p>
</body>

</html>