<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>nuova città</title>
</head>
<body>
    inserimento nuova regione dell'area geografica 
    <?php echo $_GET['area_geografica']; ?>
    <form method="POST" action="inserimento_nuova_regione.php">
        nome: <input type="text" name="regione" value="<?php if(array_key_exists('regione', $_GET))?>">
        <br>
        area geografica: <input type="text" name="area_geografica" value="<?php echo $_GET['area_geografica']; ?>">
        <button>inserisci</button>
    </form>
</body>
</html>