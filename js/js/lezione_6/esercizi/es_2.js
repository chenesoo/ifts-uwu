class Rubrica{
constructor(){
this.lista=[];
}
validita(nuovoContatto){
    return nuovoContatto !=null && nuovoContatto!=undefined&&"nome" in nuovoContatto
        &&"cognome" in nuovoContatto&&"telefono" in nuovoContatto;
}
indexOf(nuovoContatto){
    if (!this.validita(nuovoContatto)){
        return -1;
    }

    for (let index = 0; index < this.lista.length; index++) {
        const contatto = this.lista[index];
        if (contatto.telefono === nuovoContatto.telefono){
            return index;
        }
    }
    return -1;
}






aggiungiContatto(nuovoContatto){
    if (this.validita(nuovoContatto) && this.indexOf(nuovoContatto) < 0){
        this.lista.push(nuovoContatto);
    }
}
rimuoviContatto(nuovoContatto){
    let indice = this.indexOf(nuovoContatto);
    if (this.isValida(nuovoContatto)){
        this.lista.slice(indice, 1);
    }
}
stampaContatto(nome){
    if (typeof nome == "string"){
        for (const contatto of this.lista) {
            if (nuovoContatto.nome === nome){
                console.log(nuovoContatto.stampa());
            }
        }
    }
}
}
class Contatto extends Rubrica{
    constructor(nome, cognome, telefono){
        nome,
        cognome,
        telefono
    }
    stampa(){
        console.log(nome+" "+cognome+" +39"+telefono);
    }
}
let garage = new Rubrica();
let contatto1 = new Contatto("nome", "cognome", "EX090TH");
let contatto2 = new Contatto("nome", "cognome2", "EF091TL");
let contatto3 = new Contatto("nome3", "cognome3", "EK999TP");

garage.aggiungiContatto(contatto1);
garage.aggiungiContatto(contatto2);
garage.aggiungiContatto(contatto3);

garage.rimuoviContatto(contatto2);

garage.stampaContatto("nome");

