/*Ejercicio 2: Concatenar dos arrays A y B de la 
siguiente forma: A0, B0, A1, B1, A2, B2, …, An, Bn. 
Los vectores tendrán la misma longitud.*/

//Creamos los vectores arrayA y arrayB y otro array que será la concatenación de ambos
var arrayA = ["A0","A1","A2","A3","A4","A5"];
var arrayB = ["B0","B1","B2","B3","B4","B5"];
var arrayConcatenado = [];

//Con el bucle for iremos recoriendo ambos array para concatenarlos en un nuevo array
for(var i = 0; i < arrayA.length; i++){

    arrayConcatenado.push(arrayA[i]);
    arrayConcatenado.push(arrayB[i]);

    //Otra forma de concatenarlos
    //arrayConcatenado.push(arrayA[i], arrayB[i]);
}

//Mostramos el resultado
document.write ("Array concatenado: " + arrayConcatenado); 

