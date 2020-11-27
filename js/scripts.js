function generaHora(){
    let timeNow = new Date();

    let horas = timeNow.getHours().toString().length < 2 ? "0" + timeNow.getHours() : timeNow.getHours();
    let minutos = timeNow.getMinutes().toString().length < 2 ? "0" + timeNow.getMinutes() : timeNow.getMinutes();
    let segundos = timeNow.getSeconds().toString().length < 2 ? "0" + timeNow.getSeconds() : timeNow.getSeconds();

    let hora = `${horas}:${minutos}:${segundos}`;
    document.getElementById("hora").innerHTML = hora;
}

setInterval(() => {
    generaHora();
}, 1000);


function CambiaColor(){
    var sel = document.getElementById("miseleccion");
        document.body.style.backgroundColor = sel.value;
        console.log( sel.value );
}

function ingles(){
    document.getElementById("ingles").innerHTML = "<h2> Computers for sale! </h2>";

}