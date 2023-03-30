class FiguraGeometrica {
  constructor(forma) {
    this.forma = forma;
  }
  calcolaPerimetro() {
    if (this.forma == "triangolo") {
      return this.latotri1 + this.latotri2 + this.latotri3;
    }
    if (this.forma == "quadrato") {
      return this.latoquad * 4;
    }
    if (this.forma == "rettangolo") {
      return this.latoret1 * 2 + this.latoret2 * 2;
    }
    if (this.forma == "cerchio") {
      return 2 * this.pi * this.raggio;
    }
  }
  calcolaArea() {
    if (this.forma == "triangolo") {
      return (this.latotri1 * this.latotri2) / 2;
    }
    if (this.forma == "quadrato") {
      return this.latoquad * this.latoquad;
    }
    if (this.forma == "rettangolo") {
      return this.latoret1 * this.latoret2;
    }
    if (this.forma == "cerchio") {
      return this.pi * this.raggio * this.raggio;
    }
  }
}

class Triangolo extends FiguraGeometrica {
  constructor() {
    super("triangolo");
    this.latotri1 = 3;
    this.latotri2 = 4;
    this.latotri3 = 1;
  }
}
class Quadrato extends FiguraGeometrica {
  constructor() {
    super("quadrato");
    this.latoquad = 3;
  }
}
class Rettangolo extends FiguraGeometrica {
  constructor() {
    super("rettangolo");
    this.latoret1 = 4;
    this.latoret2 = 3;
  }
}
class Cerchio extends FiguraGeometrica {
  constructor() {
    super("cerchio");
    this.pi = 3.14;
    this.raggio = 4;
  }
}
let triangolo = new Triangolo();
let quadrato = new Quadrato();
let rettangolo = new Rettangolo();
let cerchio = new Cerchio();

console.log("perimetro triangolo: " + triangolo.calcolaPerimetro());
console.log("perimetro quadrato: " + quadrato.calcolaPerimetro());
console.log("perimetro rettangolo: " + rettangolo.calcolaPerimetro());
console.log("perimetro cerchio: " + cerchio.calcolaPerimetro());

console.log("area triangolo: " + triangolo.calcolaArea());
console.log("area quadrato: " + quadrato.calcolaArea());
console.log("area rettangolo: " + rettangolo.calcolaArea());
console.log("area cerchio: " + cerchio.calcolaArea());
