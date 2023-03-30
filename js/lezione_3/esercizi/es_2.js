//stampare i primi 10 numeri escluso lo zero, in lettere
function incrementa() {
    let num = 0;
    if (num === 0) {
        if (num <= 10) {
            for (i = 1; i <= 10; i++) {
                switch (i) {
                    case 1: console.log("uno");
                        break;
                    case 2: console.log("due");
                        break;
                    case 3: console.log("tre");
                        break;
                    case 4: console.log("quattro");
                        break;
                    case 5: console.log("cinque");
                        break;
                    case 6: console.log("sei");
                        break;
                    case 7: console.log("sette");
                        break;
                    case 8: console.log("otto");
                        break;
                    case 9: console.log("nove");
                        break;
                    case 10: console.log("dieci");
                        break;
                }
            }
        }
        ++num;
    }
}
incrementa();