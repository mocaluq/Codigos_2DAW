/*Teniendo un array muy grande con elementos de la siguiente estructura: 
“28924;Estepona”
Crea un texto y un botón que ponga buscar que muestre el CP y el nombre de la ciudad que coincida 
o contenga el texto del campo creado. No importan las mayúsculas y minúsculas en la búsqueda*/

//Creo un array donde introduzco los datos, en este caso código postal y ciudad.
var datos = [
    "28924:Estepona",
    "28001:Madrid",
    "08001:Barcelona"
  ];

  function buscar() {
    // Creo las variable en la que introduzco el contenido de mi label y el contenido de mi div de HTML.
    var contenido = document.getElementById("buscarDentro").value.toLowerCase();
    var resultados=document.getElementById("resultado");

    var encontrada = false;
    // Recorro mi array datos con un foreach
    datos.forEach(function(dato){
        var ciudad = dato.split(":")[1];
        if(contenido===ciudad.toLocaleLowerCase()){
            resultados.textContent = "CP: " + dato.split(":")[0] + " Ciudad: " + dato.split(":")[1];
            encontrada = true;
        }

    });
    
    if(!encontrada){
        resultados.textContent = "no hay resultado";
    }


    }
