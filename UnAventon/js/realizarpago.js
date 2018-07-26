 function runSubmit (form)  {

		if (form.tipo.value == ""){
			alert("Ingresar tipo de tarjeta");
			return false;
		}
		if (form.numtarjeta.value.length < 16){
			alert("Ingresar número de la tarjeta");
			return false;
		}
		if (form.mes.value == ""){
			alert("Ingresar mes de expiración");
			return false;
		}
		if (form.anio.value== ""){
			alert("Ingresar año de expiración");
			return false;
		}
		if (form.nomape.value == ""){
			alert("Ingresar nombre y apellido impreso en la tarjeta");
			return false;
		}
		if (form.documento.value == ""){
			alert("Ingresar número de documento del títular");
			return false;
		}
		if (form.codseguridad.value == ""){
			alert("Ingresar código de seguridad");
			return false;
		}
		
		return true;	
	}