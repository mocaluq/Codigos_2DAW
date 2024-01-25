/*Ejercicio 4: Borrando atributos de un objeto:
function coche(modelo, color, kms, combustible) {  
    this.modelo = modelo;
    this.color = color;  
    this.kms = kms;  
    this.combustible = combustible;  
}  

var elmio = new coche("Mercedes E330", "negro", 120000, "diésel");  
var eltuyo = new coche("BMV 318", "blanco", 210000, "gasolina");

En el ejemplo anterior, ¿se puede borrar un atributo con la siguiente sentencia?:
delete elmio.matrícula; */


//Si se puede, ya que estamos accediendo a un atributo e indicando que se borre con delete

function coche(modelo, color, kms, combustible) {  
    this.modelo = modelo;
    this.color = color;  
    this.kms = kms;  
    this.combustible = combustible;  
}  

var elmio = new coche("Mercedes E330", "negro", 120000, "diésel");  
var eltuyo = new coche("BMV 318", "blanco", 210000, "gasolina");

delete elmio.color;

//Podemos ver que nos mostrará color como undefined y en la consola no aparecerá
document.write("<h1>" + "Modelo: " + elmio.modelo + "</h1>" + "</br>" +
                "<h1>" + "Color: " + elmio.color + "</h1>" + "</br>" +
                "<h1>" + "Kms: " + elmio.kms + "</h1>" + "</br>" +
                "<h1>" + "combustible: " + elmio.combustible + "</h1>" + "</br>");

console.log(elmio);
