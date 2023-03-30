function creaDivColonne(valoreTesto) {
  //crea colonne
  let divCol = document.createElement("div");
  divCol.className = "col-md-3";
  divCol.innerHTML = valoreTesto;
  return divCol;
}

function creaDivRighe(indice) {
  //crea righe
  let divRow = document.createElement("div");
  divRow.setAttribute("data-id", indice);
  if (indice % 2 === 0) { //colore sfondo alternato
    divRow.className = "row";
  } else {
    divRow.className = "row bg-light";
  }
  return divRow;
}

let divRowRoot = document.getElementById("rubrica-row");
let listaContatti = rubrica.stampaContatti("az"); //array

setTimeout(function () { //caricamento
    let divLoader = document.getElementById("loader");
    divLoader.className = "d-none";
    for (let index = 0; index < listaContatti.length; index++) {
        const contatto = listaContatti[index];
        let divRiga = creaDivRighe(index);
        divRiga.appendChild(creaDivColonne(index));
        divRiga.appendChild(creaDivColonne(contatto.nome));
        divRiga.appendChild(creaDivColonne(contatto.cognome));
        divRiga.appendChild(creaDivColonne(contatto.telefono));
        divRowRoot.appendChild(divRiga);
    }
}, 10000); //10 secondi
