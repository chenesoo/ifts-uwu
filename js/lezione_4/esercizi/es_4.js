function makeAutomobile(nomeModello, nomeMarca) {
    return {
        nomeModello,
        nomeMarca
    }
}

let garage = {
    automobili: []
}

garage.validaAuto = function (auto) {
    if (auto === null || auto === undefined) {
        return false;
    }
    if ("nomeMarca" in auto && "nomeModello" in auto) {
        return true;
    }
    return false;
}
garage.inserisciAuto = function (auto) {
    if (this.validaAuto(auto)) {
        let indice = this.automobili.length;
        this.automobili[indice] = auto;
    }
}

garage.rimuoviAuto = function (auto) {
    if (this.validaAuto(auto)) {
        let indiceDaEliminare = -1;
        for (let indice = 0; indice < this.automobili.length; indice++) {
            let autoInGarage = this.automobili[indice];
            if (autoInGarage.nomeMarca === auto.nomeMarca && autoInGarage.nomeModello === auto.nomeModello) {
                indiceDaEliminare = indice;
                break;
            }
        }

        if (indiceDaEliminare >= 0) {
            this.automobili[indiceDaEliminare] = undefined;
        }
    }
}

garage.stampaAuto = function (nomeMarca) {
    for (const auto of this.automobili) {
        if (nomeMarca === auto.nomeMarca) {
            console.log(auto.nomeMarca + " " + auto.nomeModello)
        }
    }
}