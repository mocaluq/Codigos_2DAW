function manejarClick(){
    console.log("Click hecho sobre pagina");
    document.removeEventListener("click",manejarClick);
}

function load(){
    console.log("window cargada");
    document.addEventListener("click",manejarClick,false);
}

window.onload = load;
