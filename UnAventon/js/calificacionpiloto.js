 function runSubmit (form)  {

		if (form.calificacion.value == ""){
			alert("Ingresar calificación");
			return false;
		}
		if (form.comentario.value value == ""){
			alert("Ingresar comentario");
			return false;
		}
		
		return true;	
	}