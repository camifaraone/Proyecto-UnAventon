	function runSubmit (form)  {
		if (form.contrasenia.value.length < 8) {
			alert("Ingresar clave actual");
			return (false);
		}
		if (form.nuevaclave.value.length < 8) {
			alert("Ingresar nueva clave con ocho o más caracteres");
			return (false);
		}
		if (form.confirmarclave.value.length < 8) {
			alert("Repetir nueva clave con ocho o más caracteres");
			return (false);
		}
		if (form.nuevaclave.value != form.confirmarclave.value) { 
			alert("Las claves no coinciden");
			return false;
		}
		return true;	
	}			
