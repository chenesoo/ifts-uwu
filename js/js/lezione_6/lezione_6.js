function conta(){
    let count = 0;
    return function(){
        return count++;
    }
}

let counter = conta();
console.log(typeof counter);//function
console.log(counter());//intero 
console.log(counter());//intero + 1
console.log(counter());//intero + 2


let numeri = [1,2,3];
let scorri = function(elemento){
    console.log(elemento);
}
numeri.forEach(scorri);
numeri.forEach(elemento => {console.log(elemento)});
numeri.forEach(function(elemento){console.log(elemento)});