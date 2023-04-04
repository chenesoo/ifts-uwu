/**
 * tipo-07.ts
Definisci un tipo di dato primitivo per rappresentare un'ora del giorno. L'input dovrebbe essere una stringa con il formato 
"hh:mm", dove "hh" rappresenta le ore e "mm" rappresenta i minuti. Crea una funzione che accetta un'ora del giorno come 
parametro e restituisce una stringa che indica se l'ora è del mattino, del pomeriggio o della sera.

 */
console.log("=====[ tipo-07.ts ]=====");

//dato primitivo
type orario = string; // "hh:mm"

function orarioGiornata(ora: orario): string {
    const ore = parseInt(ora.split(":")[0]);

    if (ore >= 6 && ore < 12) {
        return "mattino";
    } else if (ore >= 12 && ore < 18) {
        return "pomeriggio";
    } else {
        return "sera";
    }
}
let orario1 = "07:34";
console.log(orarioGiornata(orario1));
