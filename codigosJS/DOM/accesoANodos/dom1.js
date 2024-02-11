var divs = document.getElementsByTagName("div");
console.log("El número de divs "+ divs.length);

for(var i = 0; i < divs.length; i++){
    var ids = divs[i].getAttribute("id");
    console.log("El id es " + ids);
}

var divId = document.getElementById("segundoDiv");
console.log("El id es " + divId);

