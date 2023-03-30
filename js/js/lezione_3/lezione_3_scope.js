let totale = 2;
let tot = 2;
function incrementa(tot) {
    //let totale = 0;
    tot += 1;
    console.log("il valore totale dentro la funzione e': " + tot);
    return tot;
}

/*
tot=incrementa(totale); //risultato: 3
console.log("il valore totale 1 e': " + totale); //risultato: 2

totale=incrementa(totale); //risultato: 3
console.log("il valore totale 2 e': " + totale); //risultato: 3

totale=incrementa(tot); //risultato: 4
console.log("il valore totale 3 e': " + tot); //risultato: 3
*/

let nonStampare = true;

function stampa(){
    nonStampare = !nonStampare; //da true diventa false
    if (!nonStampare){
        console.log("Stampo");
    }
}
stampa();