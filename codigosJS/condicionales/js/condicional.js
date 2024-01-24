//ESTRUCTURA IF
var hora = 23;

if (hora <= 12){
	alert("Buenos dias");
}else if ((hora <= 17)&&(hora > 12)){
	alert("Buenas tardes");
}
else{
	alert("Buenas noches");
}

//ESTRUCTURA SWITCH
var diaSemana = 6;
switch (diaSemana){
	case 1:
		alert("Lunes");
		break;
	case 2:
		alert("Martes");
		break;
	case 3:
		alert("Miercoles");
		break;
	case 4:
		alert("Jueves");
		break;
	case 5:
		alert("viernes");
		break;
	case 6:
		alert("Sabado");
		break;
	case 7:
		alert("Domingo");
		break;
	default:
		alert("No definido");
		
}