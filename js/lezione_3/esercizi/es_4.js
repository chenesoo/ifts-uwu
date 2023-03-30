//dato un array di numeri, calcolare la media e restituire in output la media e tutti i valori < della media
function media(array = [3, 5, 10, 2, 8]) {
    let somma = 0;
    sottoMedia = [];

    for (i of array) {
        somma += i;
    }
    media = somma / array.length;
    console.log("media: " + media);
    for (i of array) {
        if (i < media) {
            console.log("valore minore: " + i);
        }
    }
}
media();