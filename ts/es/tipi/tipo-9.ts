/**
 * Definisci un tipo di dato primitivo per rappresentare un indirizzo email. L'input dovrebbe essere una stringa con il
 * formato "nomeutente@dominio.com". Crea una funzione che accetta un indirizzo email come parametro e restituisce true se
 * il formato è corretto e false altrimenti.
 */
console.log("=====[ tipo-09.ts ]=====");

type email = string;

function validaEmail(formtoEmail: email): string {
    const valida1 = formtoEmail.includes("@");
    const valida2 = formtoEmail.includes(".");

    if (valida1 && valida2) {
        return "email valida";
    } else {
        return "email non valida";
    }
}

let email1 = "sus@gmail.com"; //true
let email2 = "susgmail.com"; //false
let email3 = "sus@gmailcom"; //false
let email4 = "susgmailcom"; //false
console.log(validaEmail(email1));
console.log(validaEmail(email2));
console.log(validaEmail(email3));
console.log(validaEmail(email4));
