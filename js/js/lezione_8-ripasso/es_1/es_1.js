/*Scrivere una pagina HTML con all’interno i seguenti campi:
● bottone
Aggiungere alla pagina HTML una funzione JavaScript che
● visualizza la tabellina dei primi 10 numeri all’interno di un tag <div>.
Inoltre, fare in modo che, nel documento HTML, tale funzione JavaScript
venga eseguita quando l’utente preme il bottone di invio.
*/
function stampaTabelline(numeroInteri) { //numeroInteri=10
    let div = document.getElementById("tabelline");
    for (i = 1; i <= numeroInteri; i++) {
        let cols = creaColonne(i);
        let riga = creaRiga(i, cols);
        div.appendChild(riga); //stampa sull'html
    }
}

function creaColonne(i) {
    let cols = [];
    for (y = 1; y <= 10; y++) {
        let colonna = document.createElement("div");
        colonna.className = "col";
        colonna.innerHTML = y * i; //riempio e stampo il contenuto delle colonne
        cols.push(colonna); //inserisce l'elemento in un array
    }
    return cols;
}
function creaRiga(i, cols) {
    let riga = document.createElement("div");
    riga.className = "row";
    for (j = 0; j < cols.length; j++) {
        const element = cols[j];
        riga.appendChild(element);
    }
    return riga;
}