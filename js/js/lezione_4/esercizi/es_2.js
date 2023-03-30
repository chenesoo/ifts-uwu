/* Scrivere la funzione isEmpty(obj) che ritorna true se 
l’oggetto non ha proprietà, altrimenti ritorna false */

let sus={}
function IsEmpty(obj){
    for(var key in obj){
        return false;
    }
    
return true;

}
console.log(IsEmpty(sus));