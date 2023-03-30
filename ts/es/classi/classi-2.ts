/**
 * ## classi-02.ts
 *
 * Definisci una classe denominata `Cerchio` per rappresentare un cerchio
 * in uno spazio bidimensionale.
 *
 * La classe deve contenere le seguenti proprietà:
 * centro (istanza della classe `Punto`),
 * raggio (numero).
 *
 * La classe deve contenere un metodo per calcolare l'area del cerchio.
 * La classe deve contenere un metodo per calcolare la lunghezza del cerchio.
 * Crea un'istanza della classe e stampa l'area e la lunghezza del cerchio.
 *
 * NOTA: La classe `Punto` è già definita nell'esercizio precedente,
 *       pertanto non duplicate la sua definizione, piuttosto importatela.
 *
 */
import { Punto } from "./classi-1";

class Cerchio {
    constructor(public centro: Punto, public raggio: number) {}
    getArea(): number {
        return Math.pow(this.raggio, 2) * Math.PI;
    }
    getPerimetro(): number {
        return 2 * this.raggio * Math.PI;
    }
}
const c1 = new Cerchio(new Punto(4, 1), 4);
console.log("area del cerchio: ", c1.getArea());
console.log("perimetro del cerchio: ", c1.getPerimetro());
