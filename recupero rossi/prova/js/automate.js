// lego le funzioni ai pulsanti
//alla pressione del pulsante con ID "btnRosso" chiamo la funzione aggiungiRosso
document.getElementById("btnRosso").addEventListener("click", aggiungi_rosso);
document.getElementById("btnVerde").addEventListener("click", aggiungi_verde);
document.getElementById("btnBlu").addEventListener("click", aggiungi_blu);
document.getElementById("btnAlterna").addEventListener("click", alterna_colori);

function aggiungi_rosso() {
	aggiungi_classe("bgRosso"); 
}
function aggiungi_verde() {
	aggiungi_classe("bgVerde");   
}
function aggiungi_blu() {
	aggiungi_classe("bgBlu");
}
function alterna_colori(){
    alterna_classe();
}

function aggiungi_classe(classe){
    //carico i DIV nella variabile mieiDIV
	var mieiDIV = document.getElementsByClassName("quadrato");

	//tolgo le classi già presenti
	rimuovi_classi()

	//ciclo sul contenuto di mieiDIV e aggingo la classe "bgRosso" ad ogni elemento
	for (i = 0; i < mieiDIV.length; i++){
		mieiDIV[i].classList.add(classe);
	}
}
function alterna_classe(id){
    //carico i DIV nella variabile mieiDIV
	var mieiDIV = document.getElementsByClassName("quadrato");

	//tolgo le classi già presenti
	rimuovi_classi()

	//ciclo sul contenuto di mieiDIV e aggingo la classe "bgRosso" ad ogni elemento
	for (i = 0; i < mieiDIV.length; i++){

        if(i % 3 == 0)
		mieiDIV[i].classList.add("bgRosso");

        else if(i % 3 == 1)
        mieiDIV[i].classList.add("bgVerde");

        else if(i % 3 == 2)
        mieiDIV[i].classList.add("bgBlu");
	}
}

function rimuovi_classi(){
    //carico i DIV nella variabile mieiDIV
	var mieiDIV = document.getElementsByClassName("quadrato");

	//ciclo sul contenuto di mieiDIV e aggingo la classe "bgRosso" ad ogni elemento
	for (i = 0; i < mieiDIV.length; i++){
		mieiDIV[i].classList.remove("bgBianco");
		mieiDIV[i].classList.remove("bgRosso");
		mieiDIV[i].classList.remove("bgVerde");
        mieiDIV[i].classList.remove("bgBlu");
	}
}