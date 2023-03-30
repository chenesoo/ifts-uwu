<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>1°classe</title>
</head>

<body>
    <?php
    //definizione di classe
    class Studente
    {
        //proprietà
        public $nome = "";
        public $cognome = "";
        public $ruolo = "";

        public $dataNascita;
        private $password;
        private $voti = [];

        //metodi
        function __construct($nomeDaAssegnare, $cognomeDaAssegnare)
        {
            $this->nome = $nomeDaAssegnare; //$this assegna il valore alla variabile
            $this->cognome = $cognomeDaAssegnare;
            echo "istanziato un nuovo oggetto: " . $this->nome . " " . $this->cognome . "<br>";
        }
        //metodo eta che restituisce l'età dello studente
        function setDataNascita($dataNascita)
        {
            $this->dataNascita = $dataNascita;
        }
        function eta()
        {
            $annoDataNascita = substr($this->dataNascita, 0, 4);
            $eta = date("Y") - $annoDataNascita;
            return $eta;
        }

        //metodo setVoti che inizializza l'array dei voti
        function setVoti($voti)
        {
            if (!$voti) {
                return false;
            }
            //i voti devono essere in 100 compresi tra 1 e 100
            foreach ($voti as $voto) {
                if ($voto >= 1 && $voto <= 100) {
                    //voto accettabile
                } else {
                    //voto non accettabile
                    return false;
                }
                $this->voti = $voti;
            }
        }
        function getVoti()
        {
            return $this->voti;
        }
        //metodo setPassword di Classroom che comprende la validazione della password: lunghezza min 10, almeno 1 maiuscola e 1 numero
        function setPassword($p)
        {
            $condizione_1_numero = false;
            $condizione_1_maiuscola = false;
            for ($i = 0; $i < strlen($p) || ($condizione_1_numero && $condizione_1_maiuscola); $i++) {
                $c = substr($p, $i, 1);
                //controllo $c
                //$c compreso tra 0 e 9
                //se vero, $condizione_1_numero = true;
                //$c compreso tra "A" e "Z"
                //se vero, $condizione_1_maiuscola = true;
            }
            if ($condizione_1_numero && $condizione_1_maiuscola && strlen($p) >= 10) {
                //password ok
            } else {
                //password non corretta
            }
        }
    }


    echo "<hr>";

    $s1 = new Studente("Mario", "Rossi"); //entra dentro la classe studente ed entra nel metodo __construct
    $s1->nome = "Giorgio";

    echo "il nuovo nome di s1 è: " . $s1->nome . " " . $s1->cognome . "<br>"; //scrivo il nome e cognome dello studente


    $s1->setDataNascita('1980-10-21'); //richiamo il metodo setDataNascita e in input metto la data
    echo "di anni " . $s1->eta() . "<hr>";
    $s2 = new Studente("Bruno", "Bianchi");
    $s2->setVoti([60, 100, 50, 81]);
    ?>
</body>

</html>