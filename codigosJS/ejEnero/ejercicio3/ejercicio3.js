/*Ejercicio 3: Teniendo un array muy grande con elementos de la siguiente estructura: 
“28924;Estepona”
Crea un texto y un botón que ponga buscar que muestre el CP y el nombre de la ciudad 
que coincida o contenga el texto del campo creado. No importan las mayúsculas y minúsculas en la búsqueda. */

//Creación del array con ciudades y códigos postales
var ciudades = {29680:"Estepona", 11100:"San Fernando", 29530:"Malaga", 30004:"Murcia"};
function obtenerCodigoPostal() { 
    var busqueda = document.getElementById("buscar").value.toLowerCase();//Almaceno en una variable el valor introducido en el label
    
    for (var codigoPostal in ciudades) { //Recorremos el array ciudades
        var ciudad = ciudades[codigoPostal].toLowerCase();
        //En la condición paso la ciudad en cada itinerancia a minuscula 
        if (busqueda === ciudad) { //Comparamos si es igual la ciudad que introducimos en el label que la ciudad de cada itinerancia
            var resultado = document.getElementById("result"); //Creo una variable donde almacenaré el resultado que se mostrará en un parrafo
            return resultado.textContent = "Código postal: " + codigoPostal + ", Ciudad: " + ciudades[codigoPostal]; 
           // Salir del bucle si se encuentra la ciudad y mostramos la ciudad junto con el código postal
           
           /*si no hubiese creado un elemento p en el index3 podría mostrar el resultado con: 
                    document.write("Código postal: " + codigoPostal + ", Ciudad: " + ciudades[codigoPostal])*/
        }
    }
    
    // Si no se encuentra la ciudad introducida mostrará un mensaje de ciudad no encontrada
    var resultado = document.getElementById("result");
    resultado.textContent = "Ciudad no encontrada";
}





