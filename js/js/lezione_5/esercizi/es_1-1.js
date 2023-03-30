/*
Scrivere la classe Calcolatrice che contiene al suo interno due proprietà di tipo intero
parametro1 e parametro2 che non possono essere inferiore a zero. La classe dovrà avere
anche tre metodi:
somma() ritorna la somma delle proprietà.
moltiplica() ritorna il prodotto delle proprietà.
dividi() ritorna la divisione delle proprietà
*/

class Calcolatrice {
    constructor(x, y) {
        if (typeof x != "number" || typeof y != "number" || x <= 0 || y <= 0) {
            console.log("da qualche parte e' presente una stringa o un numero è <= 0 e i numeri sono stati impostati a 0")
            this.num1 = 0;
            this.num2 = 0;
        } else {
            this.num1 = x;
            this.num2 = y;
        }
    }
    somma() {
        let somma = this.num1 + this.num2;
        return somma;
    }
    moltiplica() {
        let moltiplica = this.num1 * this.num2;
        return moltiplica;
    }
    dividi() {
        if (this.num2 <= 0) {
            return NaN;
        }
        let dividi = this.num1 / this.num2;
        let arrotonda = dividi.toFixed(2);
        return arrotonda;
    }
}
let calcola = new Calcolatrice(11, 3);
console.log("la somma e' " + calcola.somma());
console.log("la moltiplicazione e' " + calcola.moltiplica());
console.log("la divisione e' " + calcola.dividi());