/*Ejercicio 5: Crea una página web con un script que contenga un objeto 
de la clase persona, la cual tendrá los siguientes atributos:

Nombre: Dimas.
Edad: 28.
Altura: 185.

Una vez creado el objeto, se deberá mostrar por consola: “El usuario Dimas tiene 
28 años y mide 185 centímetros”.Todo ello utilizando los atributos del objeto */

//Creamos la clase persona
class Persona{
    //Definimos el método constructor, donde se le pasará por parámetro el nombre, la edad y la altura de la persona
    constructor(nombre, edad, altura){
        this.nombre = nombre;
        this.edad = edad;
        this.altura = altura;
    }

    //Este método nos mostrará por consola los atributos del objeto
    mostrarPorConsola() {
        console.log("El usuario " + this.nombre + " tiene " + this.edad + 
                        " años y mide " + this.altura + " centímetros ");
    }
}

//Creamos un objeto de tipo persona
var dimas = new Persona("Dimas", 28, 185); 

//Llamamos al metodo para mostrar la información del objeto
dimas.mostrarPorConsola();


//También lo puedo mostrar en un encabezado
document.write("<h1>" + "El usuario " + dimas.nombre + " tiene " + dimas.edad + 
                    " años y mide " + dimas.altura + " centímetros " + "</h1>");

