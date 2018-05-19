function runSubmit (form)  {
		if (form.email.value == "" || form.email.value.indexOf ('@', 0) == -1) {
			alert("Ingresar un E-mail valido");
			return false;
		}
		if (form.clave.value.length < 8) {
			alert("Ingresar clave");
			return (false);
		}
		return true;	
	}			
