/*Ejercicio 1: Dado un array de enteros, comprobar 
el mayor, el menor y por último la media de todos.
El botón «Cargar Ejemplo» pondrá un ejemplo de números 
predefinidos. */


//Función para comprobar el numero mayor, menor y la media, donde se le introducirá como parámetro un array
function mayorMenorMedia(enteros){

var mayor = -999999, menor = 999999; //Creo las variables que indicarán el número mayor, menor, la media y la suma para realizar la media
var media, suma = 0;

    for(var i = 0; i <enteros.length; i++){ //recorremos el array
        suma = suma + enteros[i]; //vamos sumando los números en cada itinerancia
        if(enteros[i] > mayor){ //si el número de la itinerancia es mayor que el anterior se almacena en mayor
            mayor = enteros[i];
        }
        if(enteros[i] < menor){ //si es menor se almacena en menor
            menor = enteros[i];
        }
    }
    media = suma / enteros.length; //enteros.length indica el tamaño del array, lo que nos permite realizar la media
   
    document.write ("<h1>" + "El número mayor es: " + mayor + "</h1>" + "</br>" + 
                                "<h1>" + "El número menor es: " + menor + "</h1>" + "</br>" + 
                                "<h1>" + "La media es: " + media + "</h1>");

}


//Esta función nos da un array predefinido de números aleatorios del 1 al 100
function generarArray(){ 
    var enteros = new Array(7); //array de 7 posiciones
    for(var i = 0; i < enteros.length; i++){
         var aleatorio = Math.floor(Math.random() *100) +1; //generamos numero aleatorios
         enteros[i] = aleatorio; //añadimos los números al array
    }
    console.log("Contenido del array: " + enteros);
    mayorMenorMedia(enteros); //llamamos al método mayorMenorMedia pasándole por parámetro el array generado
}

//La función generarArray también podríamos hacerla indicando un array creado con números no aleatorios 
/*function generarArray(){
var enteros =  [34,23,67,83,12,4,5];
console.log("Contenido del array: " + enteros);
mayorMenorMedia(enteros)
}*/
 
