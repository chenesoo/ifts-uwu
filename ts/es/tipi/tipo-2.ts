/**
 *   - tipo-02.ts
 *
 * Crea un tipo di dato enum per rappresentare i giorni
 * della settimana. Scrivi una funzione che accetta un
 *  giorno della settimana come parametro e stampa
 *  un messaggio di saluto appropriato in base al giorno.
 *  FACOLTATIVO
 *  cambiare i valori di enum con delle stringhe
 */

console.log("======[tipo-2.ts]======");

enum Settimana {
    Lunedi="lunedì",
    Martedi="martedì",
    Mercoledi="mercoledì",
    Giovedi="giovedì",
    Venerdi="venerdì",
    Sabato="sabato",
    Domenica="domenica"
}

/**Scrivi una funzione che accetta un
 *  giorno della settimana come parametro e stampa
 *  un messaggio di saluto appropriato in base al giorno. */ 

function stampaSalutoQuotidiano(g: Settimana): void {
//uso lo switch per determinare il giorno

    switch (g) {
        case Settimana.Lunedi: {
            console.log("Buongiorno è", Settimana.Lunedi);
            break;
        }
        case Settimana.Martedi: {
            console.log("Buongiorno è" , Settimana.Martedi);
            break;
        }
        case Settimana.Mercoledi: {
            console.log("Buongiorno è", Settimana.Mercoledi);
            break;
        }
        case Settimana.Giovedi: {
            console.log("Buongiorno è", Settimana.Giovedi);
            break;
        }
        case Settimana.Venerdi: {
            console.log("Buongiorno è", Settimana.Venerdi);
            break;
        }
        case Settimana.Sabato: {
            console.log("Buongiorno è", Settimana.Sabato);
            break;
        }
        case Settimana.Domenica: {
            console.log("Buongiorno è", Settimana.Domenica);
            break;
        }
    }
}
let giorno = Settimana.Venerdi;
stampaSalutoQuotidiano(giorno);
