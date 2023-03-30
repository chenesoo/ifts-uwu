<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrazione</title>

</head>

<body>
    crea account
    <form method="POST" action="inserimento_registrazione.php" enctype="multipart/form-data">
        nome: <input type="text" name=nome><br>
        cognome: <input type="text" name=cognome><br>
        e-mail: <input type="email" name=email><br>
        Password: <input type="password" name=password><br>
        immagine di profilo: <input type="file" name=icona><br>
        cv: <input type="file" name=cv><br>
        <button>registrati</button>
    </form>


</body>

</html>