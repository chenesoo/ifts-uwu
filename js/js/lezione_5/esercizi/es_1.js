/*
Scrivere un costruttore Calcolatrice che crea oggetti con 4 metodi:
leggi() richiede due valori come argomento della funzione e li memorizza nelle proprietà
dell’oggetto.
somma() ritorna la somma delle proprietà.
moltiplica() ritorna il prodotto delle proprietà.
dividi() ritorna la divisione delle proprietà
*/
function Calcolatrice() {
    this.leggi = function (x, y) {
        if (typeof x != "number" || typeof y != "number") {
            console.log("da qualche parte e'presente una stringa e i numeri sono stati impostati a 0")
            this.num1 = 0;
            this.num2 = 0;
        } else {
            this.num1 = x;
            this.num2 = y;
        }
    }

    this.somma = function () {
        somma = this.num1 + this.num2;
        return somma;
    }
    this.moltiplica = function () {
        moltiplica = this.num1 * this.num2;
        return moltiplica;
    }
    this.dividi = function () {
        if (this.num2 <= 0) {
            return NaN;
        }
        dividi = this.num1 / this.num2;
        arrotonda = dividi.toFixed(2);
        return arrotonda;
    }
}
let calcola = new Calcolatrice();
calcola.leggi(14, 7);
console.log("la somma e' " + calcola.somma());
console.log("la moltiplicazione e' " + calcola.moltiplica());
console.log("la divisione e' " + calcola.dividi());