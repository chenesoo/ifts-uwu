/*Definisci un tipo di dato per rappresentare un punteggio. Il punteggio dovrebbe essere 
un numero compreso tra 0 e 100. Crea una funzione che accetta un punteggio come parametro e 
restituisce una stringa che indica se il punteggio è insufficiente, sufficiente, buono o 
eccellente
*/
console.log("=====[ tipo-05.ts ]=====");

enum Voto {
    Insufficiente=0,
    Sufficiente=60,
    Buono=70,
    Eccellente=90,
  }
function valutazione(voto: number): string{
  if(voto >= 0 && voto < Voto.Sufficiente){
    return "insufficiente";

  }
  else if(voto >= Voto.Insufficiente && voto < Voto.Buono){
    return "sufficiente";
  }
  else if(voto >= Voto.Buono && voto < Voto.Eccellente){
    return "buono";
  }
  else if(voto >= Voto.Eccellente && voto<=100){
    return "eccellente";
  }
  else{
    return "il voto massimo deve essere compreso tra 0 e 100";
  }
}

let voto1=console.log(valutazione(65));