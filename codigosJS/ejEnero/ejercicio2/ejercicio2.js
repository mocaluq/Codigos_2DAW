/*Ejercicio 2: Concatenar dos arrays A y B de la 
siguiente forma: A0, B0, A1, B1, A2, B2, …, An, Bn. 
Los vectores tendrán la misma longitud.*/

var arrayA = ["A0","A1","A2","A3","A4","A5"];
var arrayB = ["B0","B1","B2","B3","B4","B5"];
var arrayConcatenado = [];

for(var i = 0; i < arrayA.length; i++){

    arrayConcatenado.push(arrayA[i]);
    arrayConcatenado.push(arrayB[i]);

}

document.write ("Array concatenado: " + arrayConcatenado); 

