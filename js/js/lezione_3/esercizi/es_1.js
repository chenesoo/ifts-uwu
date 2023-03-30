//stampare i primi 10 interi pari compresi tra 20 e 0, partendo da 20
function stampaPari() {
    let cont = 0;
    for (i = 20; i >= 0; i--) {
        if (i % 2 === 0) {
            ++cont;
            if (cont > 10) {
                return -1;
            }
            console.log(i);
        }
    }
}
stampaPari();