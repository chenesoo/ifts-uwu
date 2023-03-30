function toggleTesto() {
    let testo = document.getElementById("testo");
    if (testo.className === "d-none") {
        testo.className = "";
    } else {
        testo.className = "d-none";
    }
}
