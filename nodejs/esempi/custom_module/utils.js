function hello(name) {
    let benvenuto = welcome();
    console.log("ciao " + name + benvenuto);
}

function sum(a, b) {
    return a + b;
}

function welcome() {
    return ", benvenuto";
}
const pi = 3.14;
module.exports = { hello, sum, pi };
