var divs = document.getElementsByTagName("div");
console.log("El número de divs "+ divs.length);

for(var i = 0; i < divs.length; i++){
    var ids = divs[i].getAttribute("id");
    console.log("El id es " + ids);
}

var divId = document.getElementById("segundoDiv");
console.log("El id es " + divId);

//ELementos por debajo del segundo div

var ps = divId.getElementsByTagName("p");
console.log("El número de párrafos "+ ps.length);

for(var i = 0; i < ps.length; i++){
    var innerHTML = ps[i].innerHTML;
    console.log("El contenido del párrafo es " + innerHTML);
}





