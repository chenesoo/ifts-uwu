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
    //print_r($_POST);
    echo "<pre>";
    //var_dump($_FILES);
    echo "</pre>";

    foreach($_FILES as $k => $file){
        $from = $_FILES[$k]['tmp_name'];
        $to= "img/" . $_FILES[$k]['name'];
        if(!move_uploaded_file($from, $to)){
            echo "errore nell'upload del file $k";
        }
    }
//inserimento record
$sql="INSERT INTO utenti(ute_nome, ute_cognome, ute_email, ute_password, ute_icona, ute_cv)
VALUES(:nome, :cognome, :email, :password, :icona, :cv)";
$binds=[
    ['segnaposto' => "nome", 'var' => $_REQUEST['nome']],
    ['segnaposto' => "cognome", 'var' => $_REQUEST['cognome']],
];
fz_sql($sql);

    ?>
</body>

</html>