<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    class Persona
    {
        private $nome;
        const SPECIE = "essere umano"; //inizializzo una costante
        function __construct($n)
        {
            $this->setNome($n);
        }
        function setNome($n)
        {
            $this->nome = $n;
        }
        function getNome()
        {
            return $this->nome;
        }
        static public $numero; //static si riferisce solo alla classe e quindi a tutte le proprietà
        static function eta($data)
        {
        }
    }
    //include ("persona.php"); //si collega al file "persona.php"
    $p1 = new Persona("luca");
    $p2 = new Persona("sus");

    $p3 = new Persona("");
    $p3->setNome("pippo");

    echo $p1->getNome();
    echo $p2->getNome();
    //output di un metodo statico
    $eta=Persona::eta('2000-01-01');
    echo Persona::SPECIE;
    ?>
</body>

</html>