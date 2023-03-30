//dato un numero in input, stampi la tabellina corrispondente
function tabelline() {
    let num = prompt("inserisci un num");
    for (i = 0; i <= 10; i++) {
        numTab = i * num;
        console.log("2 * " + i + " = "+ numTab);
    }
}
tabelline();