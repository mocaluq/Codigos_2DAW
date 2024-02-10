var colores = ["ROJO","AMARILLO","AZUL","VERDE"];
var colorA = "";

function colorAzar(){
    var color= Math.floor(Math.random() * colores.length);
    colorA = colores[color];
    document.write("Señala el cuadrado " + "<b>" + colorA) ;
}

window.onload = colorAzar();

function elegirColor(color){
    if(color ==colorA){
        document.write("¡¡BIEN HECHO!!")
    }
    else{
        document.write("OOHH HAS FALLADO")
    }
}