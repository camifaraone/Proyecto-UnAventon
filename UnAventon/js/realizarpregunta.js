function runSubmit (form)  {
		if (form.nombre.value == ""){
			alert("Ingresar nombre");
			return false;
		}
		if (form.apellido.value == ""){
			alert("Ingresar apellido");
			return false;
		}
		if (form.email.value == "" || form.email.value.indexOf ('@', 0) == -1) {
			alert("Ingresar un E-mail valido");
			return false;
		}
		
		if (form.comentario.value == ""){
			alert("Ingresar comentario");
			return false
		}
		
		return true;	
	}