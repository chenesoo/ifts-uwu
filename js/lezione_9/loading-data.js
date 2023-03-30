function creaDivColonne(valoreTesto, classeCss) {
  let divCol = document.createElement("div");
  divCol.className = classeCss;
  divCol.innerHTML = valoreTesto;
  return divCol;
}

function creaBtnAzione(id, azione) {
  let divCol = document.createElement("div");
  divCol.className = "col-md-2";
  let btn = document.createElement("button");
  btn.className = "btn btn-block";
  btn.innerHTML = azione;
  switch (azione) {
      case "Cancella":
          btn.onclick = function () {
              if (rubrica !== null && rubrica !== undefined) {
                  rubrica.eliminaContatto(id);
                  stampaContatti();
              }
          }
          break;
      default:
          break;
  }
  divCol.appendChild(btn);
  return divCol;
}

function creaDivRighe(indice) {
  let divRow = document.createElement("div");
  divRow.setAttribute("data-id", indice);

  if (indice % 2 === 0) {
      divRow.className = "row";
  } else {
      divRow.className = "row bg-light";
  }

  return divRow;
}

function stampaContatti(lista) {
  let divRowRoot = document.getElementById("rubrica-row");
  let listaContatti = [];
  if (lista === null || lista === undefined) {
      listaContatti = rubrica.stampaContatti("az");
  } else {
      listaContatti = lista;
  }

  let divLoader = document.getElementById("loader");
  divLoader.className = "d-none";
  divRowRoot.innerHTML = "";
  for (let index = 0; index < listaContatti.length; index++) {
      const contatto = listaContatti[index];
      let divRiga = creaDivRighe(index);
      divRiga.appendChild(creaDivColonne(index, "col-md-1"));
      divRiga.appendChild(creaDivColonne(contatto.nome, "col-md-3"));
      divRiga.appendChild(creaDivColonne(contatto.cognome, "col-md-3"));
      divRiga.appendChild(creaDivColonne(contatto.telefono, "col-md-3"));
      divRiga.appendChild(creaBtnAzione(index, "Cancella"));
      divRowRoot.appendChild(divRiga);
  }

}

function salvaContatto() {
  let nome = document.getElementById("nome").value;
  let cognome = document.getElementById("cognome").value;
  let numero = document.getElementById("numero").value;

  let contattoDaAggiungere = new Contatto(nome, cognome, numero);

  if (rubrica !== undefined && rubrica != null) {
      rubrica.aggiungiContatto(contattoDaAggiungere);
      stampaContatti();
      document.getElementById("nome").value = "";
      document.getElementById("cognome").value = "";
      document.getElementById("numero").value = "";
  }
}

function cancellaRubrica() {
  if (rubrica !== undefined && rubrica !== null) {
      //rubrica.aggiungiContatto(contattoDaAggiungere);
      rubrica.database = [];
      stampaContatti();
  }
}

function cercaContatto() {
  let cerca = document.getElementById("ricerca").value;
  if (rubrica !== undefined && rubrica !== null) {
      let lista = rubrica.ricercaContatto(cerca);
      stampaContatti(lista);
  }
}

function visualizzaForm() {
  let elemento = document.getElementById("form-add-contatti");
  let classeForm = elemento.className;
  if (classeForm === "d-none") {
      elemento.className = "";
  } else {
      elemento.className = "d-none";
  }
}

setTimeout(stampaContatti(), 5000);
