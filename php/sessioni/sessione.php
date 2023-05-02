<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sessione</title>
</head>

<body>
    pagina con sessione
    <?php
    $nome = "sus";
    //$nome = $_GET['nome'];
    $_SESSION['nome'] = $nome; //nome salvato in tutte le pagine del sito
    echo "<hr>";
    print_r($_SESSION);
    ?>
</body>

</html>