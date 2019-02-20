document.getElementById("rosso").addEventListener("click", addRed);
document.getElementById("verde").addEventListener("click", addGreen);
document.getElementById("alterna").addEventListener("click", addBoth);

/**
 * Rimuove la classe "verde" da tutti i div e aggiunge la classe "rosso"
 */
function addRed(){
    var mieiDiv = document.getElementsByClassName("daColorare");

    for (i = 0; i < mieiDiv.length; i++){
        mieiDiv[i].classList.remove("verde");
        mieiDiv[i].classList.add("rosso");
    }
}

/**
 * Rimuove la classe "rosso" da tutti i div e aggiunge la classe "verde"
 */
function addGreen(){
    var mieiDiv = document.getElementsByClassName("daColorare");

    for (i = 0; i < mieiDiv.length; i++){
        mieiDiv[i].classList.remove("rosso");
        mieiDiv[i].classList.add("verde");
    }
}

/**
 * Aggiunge alternativamente le classi "rosso" e "verde" ai div
 */
function addBoth(){
    var mieiDiv = document.getElementsByClassName("daColorare");

    for (i = 0; i < mieiDiv.length; i+=2){
        mieiDiv[i].classList.remove("verde");
        mieiDiv[i].classList.add("rosso");
    }
    for (i = 1; i < mieiDiv.length; i+=2){
        mieiDiv[i].classList.remove("rosso");
        mieiDiv[i].classList.add("verde");
    }
}