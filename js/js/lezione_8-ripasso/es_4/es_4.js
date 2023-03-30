function avanti() {
    avantiIndietro("+");
}

function indietro() {
    avantiIndietro("-");
}

function avantiIndietro(direzione) {
    let carosello = document.getElementById("carosello");
    let i = getLiActive();
    if (i === -1) {
        return;
    }

    carosello.children[i].className = "d-none";
    if (direzione === "+") {
        if (i === carosello.children.length - 1) {
            carosello.children[0].className = "";
        } else {
            carosello.children[i + 1].className = "";
        }
    } else {
        if (i === 0) {
            carosello.children[carosello.children.length - 1].className = "";
        } else {
            carosello.children[i - 1].className = "";
        }
    }
}

/** mi ritorna l'indice posizionale del mio li che non ha d-none */
function getLiActive() {
    let carosello = document.getElementById("carosello");
    for (i = 0; i < carosello.children.length; i++) {
        const element = carosello.children[i];
        if (element.classList.length === 0) {
            return i;
        }
    }
    return -1;
}