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
    $domanda1 = ['categoria' => 'commerciale', 'risposta_corretta' => 0];
    $domanda2 = ['categoria' => 'assistenza', 'risposta_corretta' => 1];
    $domanda3 = ['categoria' => 'assistenza', 'risposta_corretta' => 0];
    $domande = [$domanda1, $domanda2, $domanda3];

    //copio le categorie in un array
		$elenco_categorie = [];

		foreach($domande as $domanda){
			//inserisco la categoria in un array
			$elenco_categorie[] = $domanda['categoria'];
		}
		//rimuovo le categorie duplicate
		$elenco_categorie = array_unique($elenco_categorie);

        var_dump(most_used($domande));

        $costo = 0.5 * count($domande);

		echo 'l\'azienda ha speso ' . $costo . '€';

        /**
         * Restituisce la categoria più utilizzata
         * 
         * @param array $domande
         * @return string
         */
        function most_used($domande){
            //inizializzo l'array
			$elenco_categorie = [];

			foreach($domande as $domanda){
				//verifico se la categoria è già presente nell'array
				if (key_exists($domanda['categoria'], $elenco_categorie)){
					//la categoria esiste già, aumento i partecipanti
					$elenco_categorie[$domanda['categoria']]++;
				} else {
					//la categoria non esiste, lo aggiungo all'array e inizializzo i partecipanti a 1
					$elenco_categorie[$domanda['categoria']] = 1;
				}
			}

            //cerco la categoria che ha più domande
            $max = 0;
			foreach($elenco_categorie as $key => $value){
				if($value > $max){
					//il numero di partecipanti è superiore al massimo, segno i valori
					$max = $value;
                    $risultato['valore'] = $max;
					$risultato['categoria'] = $key;
				}
			}

			return $risultato;
        }
    ?>
</body>

</html>