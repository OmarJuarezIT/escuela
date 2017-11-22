function validar(){
	var nombre,amaterno, direccion, colonia, clave,telefono,correo,area,expresion;



	nombre = document.getElementById('nombre').value;
	nombre =document.getElementById("nombre").value;
	apaterno =document.getElementById("apaterno").value;
	amaterno =document.getElementById("amaterno").value;
	direccion =document.getElementById("direccion").value;
	colonia =document.getElementById("colonia").value;
	clave =document.getElementById("clave").value;
	telefono =document.getElementById("telefono").value;
	correo =document.getElementById("correo").value;
	area =document.getElementById("area").value;

	expresion = /\w+@\w+\.+[a-z]/;

	if(nombre === "" || apaterno === "" || amaterno === "" || direccion === "" ||
		colonia === "" || clave === "" || telefono === "" || correo === "" || area === ""){

		alert ("todos los campos son obligatorios");
		return false;

}
else if(nombre.length>30){
    	alert("El nombre es muy largo");
    	return false;
    }
else if(apaterno.length>30){
    	alert("El apellido paterno es muy largo");
    	return false;
    }

     else if(amaterno.length>30){
    	alert("El apellido materno es muy largo");
    	return false;
    }

     else if(direccion.length>50){
    	alert("La direccion es muy larga");
    	return false;
    }

    else if(colonia.length>40){
    	alert("El nombre de la colonia es muy largo");
    	return false;
    }
    else if(clave.length>30){
    	alert("La contraseña es mu larga");
    	return false;
    }

    else if(telefono.length>20){
    	alert("El telefono es muy largo");
    	return false;

    }
     else if(isNaN(telefono)){
    	alert("el telefono ingresado no es un numero");
    	return false;
    }



    else if(correo.length>60){
    	alert("El correo es muy largo");
    	return false;
    }

    else if(!expresion.test(correo)){
    	alert("el correo no es valido");
    	return false;
    }


    else if(area.length>30){
    	alert("El nombre del area es muy largo");
    	return false;




}

}

