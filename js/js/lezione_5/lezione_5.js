/*lezione 2 es 1
scrivere una funzione che prenda in input un numero e restituisca
TRUE se è un numero primo, False altrimenti */

function isNumeriPrimi(num) {
    if (typeof num === "number" && num >= 1) {
        for (let i = num - 1; i > 1; i--) {
            if (num % i == 0) {
                return false;
            }
        }
        return true;
    }
    return false;
}

/*scrivere una seconda funzione che prenda in input un numero N e stampi i primi N numeri 
primi */

function stampaNumeriPrimi(n) {
    if (typeof n == "number" && n >= 1) {
        let i = 1;
        while (n >= 1) {
            if (isNumeriPrimi(i)) {
                console.log(n);
                n--;
            }
            i++;
        }
    }
}

/* es 3 lezione 2
Scrivere una funzione che prenda in input una stringa e restituisca TRUE se è palindroma, 
FALSE se non lo è. Nel controllo scarta gli spazi e i segni di punteggiatura.
*/

function checkPalindrome(str) {
    str = str.replace(/\W/g, "");
    var len = str.length;
    for (var i = 0; i < len / 2; i++) {
        if (str[i] !== str[len - 1 - i]) {
            return false;
        }
    }
    return true;
}

/*es 4 lezione 2
Scrivi una funzione che calcoli la vicinanza tra
tre numeri: A, B e N, e restituisca:
- 0 Se A e B sono equidistanti da N
- 1 Se B è più vicino a N rispetto ad A
- -1 Se A è più vicino a N rispetto a B */

function distanza(a, b, n){
    var z = a - n;
    var x = b - n;
    if (z === x){
        return 0;
    }else if (x < z) {
        return 1;
    }else{
        return -1;
    }
}