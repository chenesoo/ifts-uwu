/* Creare un oggetto vuoto Calciatore.
2. Aggiungere la proprietà nome con valore
Lorenzo.
3. Aggiungere la proprietà cognome con valore
Pellegrini.
4. Cambiare il valore di nome con Giuseppe.
5. Rimuovere la proprietà cognome
dall’oggetto */

let calciatore={};
calciatore.nome="Lorenzo";
calciatore.cognome="Pellegrini";
calciatore.nome="Giuseppe";
delete calciatore.cognome;
    

console.log(calciatore.nome, calciatore.cognome);