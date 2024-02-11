function mostrarEventoKey(){
    console.log("Tipo de evento" + event.type);
    console.log("Código de evento" + event.code);
    console.log("Numero de la tecla" + event.charCode);
    console.log("Caracter de tecla" + String.fromCharCode(event.charCode));
}

function mostrarEvento(){
    console.log(event.type);
}

function load(){
    console.log("window cargada");
    document.onkeypress = mostrarEventoKey;
}

window.onload = load;
