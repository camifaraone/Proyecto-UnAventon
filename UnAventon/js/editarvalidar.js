
	function runSubmit (form)  {
		if (form.nombre.value == ""){
			alert("Ingresar nombre");
			return false;
		}
		if (form.apellido.value == ""){
			alert("Ingresar apellido");
			return false;
		}
		if (form.nombreusuario.value == ""){
			alert("Ingresar nombre usuario");
			return false;
		}
		if (form.email.value == "" || form.email.value.indexOf ('@', 0) == -1) {
			alert("Ingresar un E-mail valido");
			return (false);
		}
		if (form.telefono.value == ""){
			alert("Ingresar número de teléfono")
			return false
		}
		if (form.fechanacimiento.value == ""){
			alert("Ingresar fecha nacimiento")
			return false
		}
		return true;	
	}			
