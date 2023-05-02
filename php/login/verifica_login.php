<?php
include("../INCLUDE_UNIVERSALE/connessione_db.php");
session_start();
$email = $password = "";
if ($_POST) {
    $email = $_POST['email'];
    $password = $_POST['password'];
}
//verifico se email e password sono corrette
//collegarsi al db
$sql = "SELECT * FROM users
WHERE use_email=:email AND use_password=:password";
$binds = [
    ['segnaposto' => 'email', 'var' => $email],
    ['segnaposto' => 'password', 'var' => $password]
];
$records = fz_sql($sql, $binds);
//$records contiene 1 record se l'autenticazione ok
// 0 se non è andato a buon fine
if ($records) {
    echo "autenticazione ok";
    $_SESSION['login'] = true;
    $_SESSION['use_id'] = $records[0]['use_id'];
    $_SESSION['use_nome'] = $records[0]['use_nome'];
} else {
    echo "autenticazione fallita. Riprova <br><a href=index.php>riprova</a>";
    $_SESSION['login'] = false;
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

</body>

</html>