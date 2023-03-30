function validaDati() {
  if (validaCampoNonVuoto("nome") && validaCampoNonVuoto("cognome")) {
      let risultato = validaCampoNonVuoto("telefono") || validaEmail("email");
      if (!risultato) {
          alert("i campi email e telefono non sono validi");
      }
  } else {
      alert("i campi nome e cognome non sono validi");
  }
}

//true se il campo non è vuoto 
//false se il campo è vuoto
function validaCampoNonVuoto(id) {
  let input = document.getElementById(id);
  if (input !== undefined
      && input.value !== undefined
      && input.value !== null
      && input.value !== "") {
      return true;
  }
  return false;
}

function validaEmail(id) {
  let input = document.getElementById(id);
  if (input !== undefined
      && input.value !== undefined
      && input.value !== null
      && input.value !== ""
      && input.value.indexOf("@") > 0) {
      return true;
  }
  return false;
}
