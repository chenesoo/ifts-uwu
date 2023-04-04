/**
 * tipo-08.ts
Crea un'interfaccia per rappresentare un animale con le seguenti proprietà: nome (stringa), specie (stringa) e numero 
di zampe (numero). Crea una funzione che accetta un array di animali come parametro e restituisce un nuovo array 
contenente solo gli animali che hanno quattro zampe.
 * 
 * 
 * 
 * 
 */
console.log("=====[ tipo-08.ts ]=====");

interface Animale {
    nome: string;
    specie: string;
    nZampe: number;
}
let animali: Animale[] = [
    { nome: "gatto", specie: "Felis silvestris", nZampe: 4 },
    { nome: "ragno", specie: "Araneae", nZampe: 8 },
    { nome: "cane", specie: "Canis lupus familiaris", nZampe: 4 },
];

function filtraAnimaliPerNZampe(animali: Animale[], nZampe: number): Animale[] {
    let animaliFiltrati: Animale[] = [];
    for (let animale of animali) {
        if (animale.nZampe === 4) {
            animaliFiltrati.push(animale);
        }
    }
    return animaliFiltrati;
}

console.log(
    "====[ Animali con 4 zampe ]====",
    filtraAnimaliPerNZampe(animali, 4)
);
