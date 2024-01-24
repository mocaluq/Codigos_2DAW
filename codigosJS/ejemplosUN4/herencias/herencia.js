//Creamos un objeto departamento
var departamento={
    nombre:"informatica",
    numeroEmpleado:34,
    imprimeNombre:function(){
        texto="El nombre del departamento es " + this.nombre;
        console.log(texto);
        return texto;

    }
}

//vamos a utilizar el objeto
var oficina=Object.create(departamento);
var empleado=Object.create(oficina);
var companiero=Object.create(empleado);
//Defino una nueva funcion dentro de empleado, que dara el numero de compañeros (numeroEmpleado)
empleado.imprimirCompaniero = function(){
    texto = "El numero de compañeros es " + this.numeroEmpleado;
    console.log(texto);
    return texto;
}
//companiero es una herencia de empleado asi que hereda el metodo imprimirCompaniero
companiero.imprimirCompaniero();