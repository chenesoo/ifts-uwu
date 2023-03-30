/**
 *  - tipo-03.ts
 *
 * Crea un'interfaccia per rappresentare un prodotto
 * con le seguenti proprietà: nome (stringa),
 *  prezzo (numero) e disponibilità (booleano).
 * Crea una funzione che accetta un array di prodotti
 *  come parametro e restituisce un nuovo array
 * contenente solo i prodotti disponibili.
 */

console.log("======[tipo-3.ts]======");

interface Prodotto {
    nome: string;
    prezzo: number;
    disponibilita: boolean;
}

let prodotto1: Prodotto = {
    nome: "Re: Zero",
    prezzo: 5,
    disponibilita: true,
};
let prodotto2: Prodotto = {
    nome: "Darling In The Franxx",
    prezzo: 4,
    disponibilita: false,
};
let prodotto3: Prodotto = {
    nome: "Spy x Family",
    prezzo: 5,
    disponibilita: true,
};
let prodotto4: Prodotto = {
    nome: "Steins;Gate",
    prezzo: 17,
    disponibilita: false,
};
let listaProdotti: Prodotto[] = [prodotto1, prodotto2, prodotto3, prodotto4];

function disponibile(listaProdotti: Prodotto[]): Prodotto[] {
    let result: Prodotto[] = [];

    for (let i = 0; i < listaProdotti.length; i++) {
        let temp = listaProdotti[i];
        if (temp.disponibilita == true) {
            result.push(temp);
        }
    }
    return result;
}

let listaDisponibili = disponibile(listaProdotti);
console.log(listaDisponibili);
