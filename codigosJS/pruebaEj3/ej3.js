/*Ejercicio 3: Teniendo un array muy grande con elementos de la siguiente estructura: 
“28924;Estepona”
Crea un texto y un botón que ponga buscar que muestre el CP y el nombre de la ciudad 
que coincida o contenga el texto del campo creado. No importan las mayúsculas y minúsculas en la búsqueda. */

//Creación del array con ciudades y códigos postales
var ciudades = {"Estepona":296980, "San Fernando":11100, "Malaga":29530, "Murcia":30004};

function obtenerCodigoPostal() { 
    var busqueda = document.getElementById("buscar").value.toLowerCase();//Almaceno en una variable el valor introducido en el label
    
    for (var ciudad in ciudades) { //Recorremos el array ciudades
        //En la condición paso la ciudad en cada itinerancia a minuscula 
        if (busqueda === ciudad.toLowerCase()) { //Comparamos si es igual la ciudad que introducimos en el label que la ciudad de cada itinerancia
            //var resultado = document.getElementById("result"); //Creo una variable donde almacenaré el resultado que se mostrará
            //return resultado.textContent = "Ciudad: " + ciudad + ", Código postal: " + ciudades[ciudad]; 
           document.write("<h1>Ciudad: " + ciudad + ", Código postal: " + ciudades[ciudad] + "</h1>");
            // Salir del bucle si se encuentra la ciudad y mostramos la ciudad junto con el código postal
        }
    }
    
    // Si no se encuentra la ciudad introducida mostrará un mensaje de ciudad no encontrada
    var resultado = document.getElementById("result");
    //resultado.textContent = "Ciudad no encontrada";
}





