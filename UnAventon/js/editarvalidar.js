
	function runSubmit (form)  {
		if (form.nombre.value == ""){
			alert("Ingresar nombre");
			return false;
		}
		if (form.apellido.value == ""){
			alert("Ingresar apellido");
			return false;
		}
		if (form.telefono.value == ""){
			alert("Ingresar número de teléfono")
			return false
		}
		if (form.fechanacimiento.value == ""){
			alert("Ingresar fecha nacimiento")
			return false
		}	
		if (form.foto.value == "") {
			alert("Ingresar foto");
			return false;
		}
		return true;
	}			
