let bankAccount = {
    money: 2000,
    deposit(value) {
        this.money += value;
    },
};

let s: string = null;

let myself = {
    name: "Max",
    bankAccount: bankAccount,
    hobbies: ["Sports", "Cooking"],
};

myself.bankAccount.deposit(3000);

console.log(myself);
////////////////////////////////////////////////
class Person {
    name: string;
    private type: string;
    protected age: number;

    constructor(n: string, t: string = "italiano", a: number = 27) {
        this.name = n;
        this.type = t;
        this.age = a;
    }
    chiSonoIo(): void {
        console.log(
            "io sono" +
                this.type +
                " ed il mio nome è" +
                this.name +
                " ed ho" +
                this.age +
                "anni"
        );
    }
}

class Lavoratore extends Person {
    ditta: string;
    anniEsperienza: number = this.age - 20;
}

let p: Person = new Person("sus");
let l: Lavoratore = new Lavoratore("sussy", "tedesco");
p.chiSonoIo();
l.chiSonoIo();
// console.log("p.name:", p.name);
// console.log("l.anniEsperienza", l.anniEsperienza); // stampa 7
//p.type --> errore
//p.age --> errore
console.log(l.anniEsperienza); //stampa 7
