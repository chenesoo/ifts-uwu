let etichetta = "nomeProprieta";
let oggetto = {
    [etichetta]: "sus"
}
let oggetto1 = {
    "etichetta": "suss"
}
let oggetto2 = {
    etichetta: "susss"
}
console.log(oggetto.nomeProprieta);
console.log(oggetto[etichetta]);
console.log(oggetto["nomeProprieta"]);
console.log(etichetta);

function makeObj(nominativo) {
    return {
        nominativo
    };
}
let og = makeObj("prova");
console.log(og.nominativo);

function existsProperty(nomeProperty, obj) {
    if (obj === null || obj === undefined) {
        return false;
    }
    if (nomeProperty === null || nomeProperty === undefined) {
        return false;
    }
    if (obj[nomeProperty] === undefined) {
        return false;
    }
    return true;
}