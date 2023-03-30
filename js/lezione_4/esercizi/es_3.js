/* Scrivere una funzione che stampi il nome e il
cognome dei calciatori che hanno il numero
della maglia uguale a 10 */

var calciatori = [
    { nome: "Lorenzo", cognome: "Pellegrini", maglia: 10 },
    { nome: "Edin", cognome: "Dzeko", maglia: 23 },
    { nome: "Federico", cognome: "Chiesa", maglia: 99 },
    { nome: "Paulo", cognome: "Dybala", maglia: 10 },
    { nome: "Lorenzo", cognome: "Insigne", maglia: 10 },
    { nome: "Andrea", cognome: "Belotti", maglia: 9 },
    { nome: "Antonio", cognome: "Vacca", maglia: undefined },
]
function stampaNomeCognome(calciatore) {
    for (var key of calciatore) {
        if (key.maglia === 10) {
            console.log(key.nome + " " + key.cognome);
        }
    }
}
stampaNomeCognome(calciatori);