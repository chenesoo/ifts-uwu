<?php
include_once("include/connessione_db.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inserimento Registrazione</title>
</head>

<body>
    <?php
//inserimento record
$sql="INSERT INTO utenti(ute_id, ute_nome, ute_cognome, ute_email, ute_password, ute_icona, ute_cv)
VALUES(:id, :nome, :cognome, :email, :password, :icona, :cv)";
$binds=[
    ['segnaposto' => "email", 'var' => $_REQUEST['email']],
    ['segnaposto' => "password", 'var' => $_REQUEST['password']],
];
fz_sql($sql);

    ?>
</body>

</html>