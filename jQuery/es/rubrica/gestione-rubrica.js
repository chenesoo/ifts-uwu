$(document).ready(
    function () {
        if (rubrica !== null && rubrica !== undefined) {
            //Tolgo lo spinner
            $("#loader").hide();
            stampaContatti();
           
        }
    }
);


function stampaContatti(listaContatti) {
    if (listaContatti === undefined) {
        listaContatti = rubrica.stampaContatti("az");
    }
    let divRoot = $("#rubrica-row");
    divRoot.html("");
    let divRighe = [];
    for (let index = 0; index < listaContatti.length; index++) {
        const contatto = listaContatti[index];
        let divRiga = creaDivRighe(index);
        divRoot.append(divRiga);
        divRiga.appendChild(creaDivColonne(index, "col-1"));
        divRiga.appendChild(creaDivColonne(contatto.nome, "col-3"));
        divRiga.appendChild(creaDivColonne(contatto.cognome, "col-3"));
        divRiga.appendChild(creaDivColonne(contatto.telefono, "col-3"));
        let divActions = creaDivColonne(creaBtnAzione(index, "Cancella"), "col-2");
        divActions.appendChild(creaBtnAzione(index, "Modifica"));
        divRiga.appendChild(divActions);
        divRighe.push(divRiga);

    }
    divRoot.append(divRighe);

    $("button.cancella").on("click", function (event) {
        let id = $(this).attr("data-id");
        if (rubrica !== null && rubrica !== undefined && id !== undefined) {
            rubrica.eliminaContatto(id);
            stampaContatti();
        }
    });

    $("button.modifica").on("click", function (event) {
        let id = $(this).attr("data-id");
        if (rubrica !== null && rubrica !== undefined && id !== undefined) {
            //rubrica.eliminaContatto(id);
        }
    });


}

function creaDivColonne(valore, classeCss) {
    let divCol = document.createElement("div");
    divCol.className = classeCss;
    if (valore instanceof HTMLElement) {
        divCol.appendChild(valore);
    } else {
        divCol.innerHTML = valore;
    }
    return divCol;
}

function creaBtnAzione(id, azione) {

    let btn = document.createElement("button");
    //vado ad inserire un attributo con l'id del elemento della riga in modo da richiamarlo successivamente
    btn.setAttribute("data-id", id);
    btn.className = "btn btn-block btn-primary " + azione.toLowerCase();
    btn.innerHTML = azione;
    return btn;
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