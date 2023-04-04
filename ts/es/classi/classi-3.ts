/**
 * Definisci una classe denominata `Rettangolo` per rappresentare un rettangolo in uno spazio bidimensionale. La classe deve 
 * contenere le seguenti proprietà: base (numero), altezza (numero). La classe deve contenere un metodo per calcolare l'area 
 * 
 * del rettangolo. La classe deve contenere un metodo per calcolare il perimetro del rettangolo. Crea un'istanza della classe 
 * e stampa l'area e il perimetro del rettangolo.

NOTA: La classe `Punto` è già definita nell'esercizio precedente, pertanto non duplicate la sua definizione, piuttosto importatela.
 * 
 */

import { Punto } from "./classi-1";

class Rettangolo{
    constructor(public base: number, public altezza: number) {}
    getArea(): number {
        return this.base* this.altezza;
    }
    getPerimetro(): number {
        return 2 * (this.base*2)+(this.altezza*2);
    }
}
const verticeA = new Punto(0, 0);
const verticeB = new Punto(4, 0);
const verticeC = new Punto(4, 3);
const verticeD = new Punto(0, 3);

const base = verticeA.distanzaDalPunto(verticeB);
const altezza = verticeB.distanzaDalPunto(verticeC);

const rettangolo = new Rettangolo(base, altezza);
console.log("Area:", rettangolo.getArea());
console.log("Perimetro:", rettangolo.getPerimetro());